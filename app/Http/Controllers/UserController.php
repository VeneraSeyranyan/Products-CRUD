<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get()->toArray();
        //laravel-ում  var_dump փոխարեն,փոխանցել view֊ին ու տեսնել իրա մեջ
        //dd($users);
        return view('user.index', ['name' => '<script>alert(11);</script>','users'=>$users]);
    }

}
