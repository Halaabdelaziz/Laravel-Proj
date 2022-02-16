<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    //list all posts 
    function index(){
        $data = [[
            "id"=>1,
            "name"=>"hala",
            "body"=>"junior Web developer",
            "title"=>"PHP Laravel"
        ],[
            "id"=>2,
            "name"=>"hepa",
            "body"=>" Web developer",
            "title"=>"PHP "
        ],[
            "id"=>3,
            "name"=>"lina",
            "body"=>"senior Web developer",
            "title"=>"PHP Laravel"
        ],[
            "id"=>4,
            "name"=>"aya",
            "body"=>"lead Web developer",
            "title"=>" Laravel"
        ]];
     
        return view("posts.index",["data"=>$data]);
    }

    // show one post
    function show($id){
        $data=[
            "id"=>$id,
            "name"=>"hala",
            "body"=>"junior Web developer",
            "title"=>"PHP Laravel"
        ];
        return view("posts.show",$data);
    }

    // edit post
    function edit($id){

        $data = [
            "id"=>$id,
            "name"=>"hala",
            "body"=>"junior Web developer",
            "title"=>"PHP Laravel"
        ];
        return view("posts.edit",$data);


    }

    function update($id){

        return view("posts.update");
    }

    function create(){
        return view("posts.create");
    }

    function destroy(){
        
    }
}
