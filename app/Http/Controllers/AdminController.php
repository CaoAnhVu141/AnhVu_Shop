<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    // public function showAdmin(Request $request)
    // {
    //     $keyword = "";
    //     if($request->input('keyword'))
    //     {
    //         $keyword = $request->input('keyword');
    //     }
    //     $users = User::where('name', 'LIKE', "%$keyword%")->paginate(10);
    //     return view('admin.user.list_user',compact('users'));
    // }


}
