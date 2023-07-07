<?php

namespace App\controllers;

use App\core\App;

class UsersController{

    public function index()
    {
        $users= App::get('database')->fetchAll('users');

        return view('users',compact('users'));
    }

    public function store()
    {

        App::get('database')-> insert('users',  [
            'name'=> $_POST['names']
        ]);

        return redirect('users');

    }
}

