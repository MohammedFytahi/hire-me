<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $role = Auth()->user()->role;

            if($role=='user'){
                return view('dashboard');
            }

            else  if($role=='admin'){
                return view('admin.admin');
            }
            else  if($role=='entreprise'){
                return view('company.index');
            }
        }

    }
}
