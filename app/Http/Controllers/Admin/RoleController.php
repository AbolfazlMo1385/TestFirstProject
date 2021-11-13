<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function add(Request $request){
        $name = $request->name;
        Role::create(["name" => $name]);
    }
    //
}
