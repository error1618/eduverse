<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\group;
use Illuminate\Support\Facades\Log;


class GroupChat extends Component
{    public $groups;
    public $selected = null;
    public $messages = [];
    protected $listeners=[
        'showMessages'=>'showMessages',
     ];
    public function render()
    {
        $userId = auth()->id();
        $this->groups = DB::table('groups')
        ->where(function ($query) use ($userId) {
            $query->whereJsonContains('members', $userId)
                ->orWhere('admin_id', $userId);
        })
        ->get();        /*->join('notification', function ($join) {
            $join->on('notification.line_1', '=', 'users.id')
                 ->orOn('notification.line_2', '=', 'users.id');
        })
        ->where('notification.line_1',auth()->id())
        ->orWhere('notification.line_2',auth()->id())
        ->select('users.*')
        ->distinct()
        ->get();*/
        return view('livewire.group-chat');
    }

    public function showMessages($groupId){
        $group = Group::find($groupId);
        $this->selected = null;
        $this->selected = $group;
        $this->messages = $group->groupMessages();
        Log::debug("hiii");
    }

}
