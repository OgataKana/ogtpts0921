<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function create(){
        return view('admins.item');
    }
    public function store(){
        
    }
    
}
