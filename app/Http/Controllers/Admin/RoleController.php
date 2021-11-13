<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function add(Request $request){
        $name = $request->name;
        try{
            $role = Role::create(["name" => $name]);
            return response()->json([
                'data' => $role,
                'msg'  => 'successfully'
            ], 200);
        }catch (\Exception $exception){
            return response()->json([
                'data' => $exception,
                'msg'  => 'failed'
            ], 500);
        }


    }
    //
}
