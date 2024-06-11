<?php

namespace App\Http\Controllers\back;

use App\Models\Manager;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('back.user.users',compact('users'));
    }
    public function changeStatus(User $user){
        if($user->status==0){
            $user->status=1;
        }else{
            $user->status=0;
        }
        $user->save();
        return redirect()->back();
    }
    public function destroy(Request $request){
        foreach($request->ids as $id){
            Manager::where('user_id',$id)->delete();
        }
        User::destroy($request->ids);
        return redirect()->back();
    }
}
