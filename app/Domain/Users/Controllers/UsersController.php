<?php

namespace App\Domain\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Users\Models\User;

class UsersController extends Controller
{
    public function index(){
      $users = User::orderBy('id', 'desc')->paginate(5);
      return view('Users.index', ['users' => $users]);
    }
}
