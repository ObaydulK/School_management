<?php

namespace App\Http\Controllers;

use App\Models\studentprotal;
use Illuminate\Http\Request;

class StudentprotalController extends Controller
{
    //
    public function students(){
        $Student = studentprotal::get();
        return view("studentprotal",compact("Student"));
    }
}
