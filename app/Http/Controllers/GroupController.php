<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;

class GroupController extends Controller
{
    public function index(){
        return view('groupchat.group');
    }

    public function createGroup(Request $request){
        $request->validate([
            'name' => 'required|string|max:50', 
        ]);
    
        $newGroup = new Group();
        $newGroup->admin_id = auth()->id();
        $newGroup->name = $request->name;
        $newGroup->save();
    
        return redirect()->back();
    }
    

    public function AddToGroup(Request $request){
        $newMember = $request->uid;
        $group = group::find($request->gid);
        $group->addGroupMember((int)$newMember);
        return redirect()->back();
    }

}

