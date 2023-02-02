<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }

      public function index(){
        $allUser = User::orderBy('id','DESC')->get();
         return view('admin.user.all',compact('allUser'));
       }

      public function add(){

      }
      public function profile(){

    }

}
