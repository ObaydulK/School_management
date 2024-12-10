<?php

namespace App\Http\Controllers;

 
use App\Models\studentprotal;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function showlist(){
        $studentprotals = studentprotal::get();
        return view("studentprotal",compact("studentprotals"));
        
    }

    public function createstudentlist(){
        return view("studentpost");
    }

    public function storenow(Request  $request){
        studentprotal::create($request->all());
        return redirect("/studentprotals");
       
    }
    public function deletes($id){
        $deletepost = studentprotal::find( $id );
        $deletepost->delete();
         return redirect()->route('show.list')->with('success','hesso');
    }

}
