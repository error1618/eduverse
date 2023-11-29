<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class group extends Model
{

    use HasFactory;
    
    public function getGroupMembers(){
        return $this->user_ids ?? [];
    }

    public function addGroupMember($userId)
    {
        $userIds = $this->getGroupMembers();
        $userIds[] = $userId;

        $this->update(['user_ids' => $userIds]);
    }

    public function deleteGroupMember($userId){
        $userIds = $this->getGroupMembers();
        $userIds = array_filter($userIds, function ($id) use ($userId) {
            return $id != $userId;
        });

        $this->update(['user_ids' => $userIds]);
    }

    public function groupMessages(){
        return DB::table('group_messages')
        ->where('group_id', $this->id)->get();
    }
    
}
