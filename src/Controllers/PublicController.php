<?php 
namespace App\Controllers;

class PublicController {
    
    public function index(){
        $months = ['January', 'February', 'March'];
        $posts = [
            ['title' => 'post1', 'text' => 'some body 1'],
            ['title' => 'post2', 'text' => 'some body 2'],
            ['title' => 'post3', 'text' => 'some body 3'],
            ['title' => 'post4', 'text' => 'some body 4'],
        ];
        view('index', compact('months', 'posts'));
        //view('index', ['months' => $months, 'posts' => $posts]);
    }

    public function us(){
        $months = ['January', 'February', 'March'];
        $posts = [
            ['title' => 'post5', 'text' => 'some body 5'],
            ['title' => 'post6', 'text' => 'some body 6'],
            ['title' => 'post7', 'text' => 'some body 7'],
            ['title' => 'post8', 'text' => 'some body 8'],
        ];
        view('us', compact('months', 'posts'));
    }
    public function form() {
        dump($_GET, $_POST);
        // $email = '';
        // if(isset($_GET['email'])){
        //     $email = $_GET['email'];
        // }
        // $email = isset($_GET['email']) ? $_GET['email'] : '';
        $email = $_GET['email'] ?? $_POST['email'] ?? '';
        view('form', compact('email'));
    }
    public function answer(){
        dump($_GET, $_POST);
    }
}

