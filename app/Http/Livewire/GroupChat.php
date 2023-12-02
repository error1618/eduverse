<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\group;
use App\Models\GroupMessage;

use Illuminate\Support\Facades\Log;


class GroupChat extends Component
{    public $groups;
    public $selected = null;
    public $messages = [];
    public $connectedID = [];
    protected $listeners=[
        'showMessages'=>'showMessages',
        'userConnected'=>'userConnected',
        'sendMessages'=>'sendMessages',
        'receivedMessage'=>'receivedMessage',
        'removeUser'=>'removeUser',
        'leaveGroup'=>'leaveGroup'
     ];
    public function render()
    {
        $userId = auth()->id();
        /*$this->groups = DB::table('groups')
        ->where(function ($query) use ($userId) {
            $query->whereJsonContains('members', $userId)
                ->orWhere('admin_id', $userId);
        })
        ->get();       */
        $this->groups = Group::where(function ($query) use ($userId) {
            $query->whereJsonContains('members', $userId)
                ->orWhere('admin_id', $userId)
                ->orWhereRaw('json_extract(members, "$.'.$userId.'") IS NOT NULL');
        })
        ->get();
        
        
        return view('livewire.group-chat');
    }

    public function showMessages($groupId){
        $group = Group::find($groupId);
        $this->selected = null;
        $this->selected = $group;
        $this->messages = $group->groupMessages();
        for ($i = 0; $i < count($this->messages); $i++) {
            $this->messages[$i] = json_decode(json_encode($this->messages[$i]), true);
        }

    }

    public function userConnected($data){
        if($data["status"] == 'disconnect'){
            $index = in_array($data['id'], $this->connectedID);
            if ($index) {
                unset($this->connectedID[$index]);
            }
        }else{
        //$this->connected = true;
        foreach ($this->groups as $group){
            if (in_array($data['id'], $group->getGroupMembers())){
                    $this->connectedID[] = $data['id'];
            }
        }
        
    }
}

    public function sendMessages($message){
        $user = auth()->user();
        $message = $this->selected->addMessage($message,$user->id);
        $this->messages[] = $message; #json_encode($message);
        $this->messages = $this->selected->groupMessages();
        for ($i = 0; $i < count($this->messages); $i++) {
            $this->messages[$i] = json_decode(json_encode($this->messages[$i]), true);
        }
    }
    public function receivedMessage($source,$message,$server){
        $latestMessage = GroupMessage::where('sender_id', $source)
        ->where('message', $message)
        ->where('group_id', $server)
        ->latest()
        ->first();
        if ($latestMessage) {
            $this->messages[] = $latestMessage->toArray();
        } 
        $this->messages = $this->selected->groupMessages();
        for ($i = 0; $i < count($this->messages); $i++) {
            $this->messages[$i] = json_decode(json_encode($this->messages[$i]), true);
        }
    }

    public function removeUser($id){
        if($this->selected){
            $this->selected->deleteGroupMember($id);
        }
    }

    public function leaveGroup($group){
        $gp =  Group::find($group);
        if(auth()->id() == $gp->admin_id){
            $gp->deleteGroup();
        }else{
            $gp->deleteGroupMember(auth()->id());
        }
        $userId = auth()->id();
        $this->groups = Group::where(function ($query) use ($userId) {
            $query->whereJsonContains('members', $userId)
                ->orWhere('admin_id', $userId);
        })
        ->get();
    }
}
