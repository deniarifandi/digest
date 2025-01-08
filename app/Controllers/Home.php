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

     public function case_study($subject_id){

        $query1 = $this->db->table('subjects')
        ->select('*')
        ->where('subjects.deleted_at',null)
        ->where('subjects.subject_id',$subject_id)
        ->get();

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,cases.description, cases.case_id, subjects.subject_name, cases.file')
        ->join('cases','subjects.subject_id = cases.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('cases.deleted_at',null)
        ->where('cases.subject_id',$subject_id)
        ->get();

        $subjects = $query1->getResult();
        $cases = $query2->getResult();

        // print_r($subjects)
        return view('cases.php',['subjects'=> $subjects,'cases' => $cases]);
    }

    public function presentation($subject_id){

        $query1 = $this->db->table('subjects')
        ->select('*')
        ->where('subjects.deleted_at',null)
        ->where('subjects.subject_id',$subject_id)
        ->get();

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,presentations.description, presentations.presentation_id, subjects.subject_name, presentations.file')
        ->join('presentations','subjects.subject_id = presentations.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('presentations.deleted_at',null)
        ->where('presentations.subject_id',$subject_id)
        ->get();

        $subjects = $query1->getResult();
        $presentations = $query2->getResult();

        // print_r($subjects)
        return view('presentations.php',['subjects'=> $subjects,'presentations' => $presentations]);
    }

    public function pedagogy(){

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,pedagogys.description, pedagogys.pedagogy_id, subjects.subject_name, pedagogys.file')
        ->join('pedagogys','subjects.subject_id = pedagogys.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('pedagogys.deleted_at',null)
        ->get();

        $pedagogys = $query2->getResult();

        // print_r($subjects)
        return view('pedagogy.php',['pedagogys' => $pedagogys]);
    }


     public function microcredential(){

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,microcredentials.description, microcredentials.microcredential_id, subjects.subject_name, microcredentials.file')
        ->join('microcredentials','subjects.subject_id = microcredentials.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('microcredentials.deleted_at',null)
        ->get();

        $microcredentials = $query2->getResult();

        // print_r($subjects)
        return view('microcredential.php',['microcredentials' => $microcredentials]);
    }



}
