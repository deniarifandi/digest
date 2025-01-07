<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function __construct(){
        $this->db = \Config\Database::connect();
       
    }

    public function index()
    {
        $query = $this->db->table('subjects')
        ->where('deleted_at',null)
        ->get();

        $subjects = $query->getResult();
        return view('index.php',['subjects' => $subjects]);
    }

    public function material($subject_id){
        $query = $this->db->table('subjects')
        ->where('deleted_at',null)
        ->where('subject_id',$subject_id)
        ->get();

        $subjects = $query->getResult();
        return view('material.php',['subjects'=> $subjects]);
    }

    public function lesson_plan($subject_id){

        $query1 = $this->db->table('subjects')
        ->select('*')
        ->where('subjects.deleted_at',null)
        ->where('subjects.subject_id',$subject_id)
        ->get();

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,lesson_plans.description, lesson_plans.lessonPlan_id, subjects.subject_name, lesson_plans.file')
        ->join('lesson_plans','subjects.subject_id = lesson_plans.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('lesson_plans.deleted_at',null)
        ->where('lesson_plans.subject_id',$subject_id)
        ->get();

        $subjects = $query1->getResult();
        $lesson_plans = $query2->getResult();

        // print_r($subjects)
        return view('lessonplan.php',['subjects'=> $subjects,'lesson_plans' => $lesson_plans]);
    }


}
