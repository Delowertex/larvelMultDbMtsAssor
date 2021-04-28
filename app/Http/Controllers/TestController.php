<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Post;

class TestController extends Controller
{
    public function addStudent(){
        $students = [
            ['name'=>'smith', 'email'=>'smith@gmail.com', 'phone'=>'1728984156'],
            ['name'=>'himel', 'email'=>'himel@gmail.com', 'phone'=>'1728984155'],
            ['name'=>'kamal', 'email'=>'kamal@gmail.com', 'phone'=>'1728984157'],
            ['name'=>'helal', 'email'=>'helal@gmail.com', 'phone'=>'1728984158'],
            ['name'=>'karim', 'email'=>'karim@gmail.com', 'phone'=>'1728984159'],
        ];
        Student::insert($students);
        return "Student inserted successfully!";
    }

    public function addPost(){
        $post = [
            ['title'=>'first tile', 'body'=> 'first description here'],
            ['title'=>'second tile', 'body'=> 'second description here'],
        ];
        Post::insert($post);
        return "Post inserted successfully!";
    }

    public function getStudent(){
        $students = Student::all();
        return $students;
    }

    public function getPost(){
        $posts = Post::all();
        return $posts;
    }
}
