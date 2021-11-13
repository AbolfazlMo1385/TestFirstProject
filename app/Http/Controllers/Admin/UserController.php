<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function add(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        User::create(["name" => $name,"email" => $email,"password" => $password]); }
    //
    public function get($id){
     try{ 
        $user=User::with('role')->find($id);
        // $user->map(function ($item){
        //   return $item;
        // });
        if (!$user){
            return response()->json([
                'data' => '',
                'msg' => ' NOT FOUND'
            ],404);
                
        }
        else{ 
         return response()->json([
             'data' => $user,
             'msg' => 'successfully'
         ],200);}
        
        }catch(Exception $exception){
            return response()->json([
                'data' => $exception,
                'msg' => 'FAILED'
            ],500);
      }}
}