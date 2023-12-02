<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class group extends Model
{

    use HasFactory;

    protected $fillable = [
        "members",
    ];
    
    public function getGroupMembers(){
        return json_decode($this->members, true) ?? [];
    }

    public function addGroupMember($userId)
    {
        if( in_array($userId,$this->getGroupMembers())){
            return ;
        }
        $userIds = $this->getGroupMembers();
        $userIds[] = (int)$userId;
        $this->update(['members' => $userIds]);

    }

    public function deleteGroupMember($userId){
        $userIds = $this->getGroupMembers();
        $userIds = array_filter($userIds, function ($id) use ($userId) {
            return $id != $userId;
        });
        $this->update(['members' => json_encode($userIds)]);
    }

    public function groupMessages(){
        return DB::table('group_messages')
        ->where('group_id', $this->id)->get();
    }

    public function addMessage($content,$sender_id){
        $message = new GroupMessage();
        $message->sender_id = $sender_id;
        $message->message  = $content;
        $message->group_id = $this->id;
        $message->save();
        return $message  ;
    }

    public function deleteGroup(){
        $this->delete();
    }
    
}
