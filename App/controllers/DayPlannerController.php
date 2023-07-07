<?php

namespace App\controllers;

use App\core\App;

class DayPlannerController{

    public function index()
    {
        $dayplanner= App::get('database')->fetchAll('dayPlanner');
        

        return view('dayplanner',compact('dayplanner'));

        
    }

    public function store()
    {

        App::get('database')-> insert('dayPlanner',  [
            'task'=> $_POST['names']
        ]);

        return redirect('dayplanner');

    }
}