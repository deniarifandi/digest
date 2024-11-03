<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index.php');
    }

    public function material(){
        return view('material.php');
    }

    public function lesson_plan(){
        return view('lessonplan.php');
    }


}
