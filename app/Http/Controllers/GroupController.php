<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;

class GroupController extends Controller
{
    public function index(){
        return view('groupchat.group');
    }

    public function CreateGroup(Request $request){
        
        $newGroup = new group();
        $newGroup->admin_id = auth()->id();
        $newGroup->name = $request->name;
        $newGroup->save();
        return view('groupchat.group');
    }

}

