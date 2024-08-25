<?php

namespace App\Controllers;

use App\Models\Book;

class ProfileController extends Controller{

    public function index(){
        $book = new Book();
        return view("post/index",[
            'message'   => "Hello from Controller",
            'books'     => $book->getAll()
        ]);
    }

    public function to_another_route(){
        return redirect("/route2");
    }

    public function another_method(){
        echo "Another Page, LOL";
    }
}

?>