<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function __construct(){
        $this->db = \Config\Database::connect();
       
    }

    public function index()
    {
        $countStudents = $this->db->table('students')
        ->where('deleted_at',null)
        ->countAll();

        $countTeachers = $this->db->table('teachers')
        ->where('deleted_at',null)
        ->countAll();

        $countClasses = $this->db->table('classes')
        ->where('deleted_at',null)
        ->countAll();

        $countSubjects = $this->db->table('subjects')
        ->where('deleted_at',null)
        ->countAllResults();

        $countPedagogys = $this->db->table('pedagogys')
        ->where('deleted_at',null)
        ->countAll();

        $countMicrocredentials = $this->db->table('microcredentials')
        ->where('deleted_at',null)
        ->countAll();

        $countLessonPlans = $this->db->table('lesson_plans')
        ->where('deleted_at',null)
        ->countAll();

        $countCases = $this->db->table('cases')
        ->where('deleted_at',null)
        ->countAll();

         $countPresentations = $this->db->table('presentations')
        ->where('deleted_at',null)
        ->countAll();

        $data = [
            'students' => $countStudents,
            'teachers' => $countTeachers,
            'classes' => $countClasses,
            'subjects' => $countSubjects,
            'pedagogys' => $countPedagogys,
            'microcredentials' => $countMicrocredentials,
            'lessonPlans' => $countLessonPlans,
            'cases' => $countCases,
            'presentations' => $countPresentations,
        ];

        $query = $this->db->table('subjects')
        ->where('deleted_at',null)
        ->get();

        $subjects = $query->getResult();
        return view('index.php',['subjects' => $subjects,'data'=>$data]);
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

    public function assessment(){

        $query1 = $this->db->table('subjects')
        ->select('*')
        ->where('subjects.deleted_at',null)
        ->get();

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,assessments.assessment,assessments.description, assessments.assessment_id, subjects.subject_name, assessments.file')
        ->join('assessments','subjects.subject_id = assessments.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('assessments.deleted_at',null)
        ->get();

        $subjects = $query1->getResult();
        $assessments = $query2->getResult();

        // echo json_encode($assessments);
        return view('assessment.php',['assessments' => $assessments,'subjects' => $subjects]);
    }

    public function pedagogy(){

        $query2 = $this->db->table('pedagogys')
        ->where('pedagogys.deleted_at',null)
        ->where('pedagogys.deleted_at',null)
        ->where('pedagogys.subject_id',null)
        ->get();

        $pedagogys = $query2->getResult();

        // print_r($subjects)
        return view('pedagogy.php',['pedagogys' => $pedagogys]);
    }

    public function pedagogy_sub($id_subject){

        $query2 = $this->db->table('subjects')
        ->select('subjects.subject_id,pedagogys.description, pedagogys.pedagogy_id, subjects.subject_name, pedagogys.file')
        ->join('pedagogys','subjects.subject_id = pedagogys.subject_id','left')
        ->where('subjects.deleted_at',null)
        ->where('pedagogys.deleted_at',null)
        ->where('subjects.subject_id',$id_subject)
        ->get();

        $pedagogys = $query2->getResult();

        // print_r($subjects)
        return view('pedagogy.php',['pedagogys' => $pedagogys]);
    }


     public function microcredential(){

        $query2 = $this->db->table('microcredentials')
        ->select('microcredentials.*')
        ->where('microcredentials.deleted_at',null)
        ->get();

        $microcredentials = $query2->getResult();

        // print_r($subjects)
        return view('microcredential.php',['microcredentials' => $microcredentials]);
    }

    public function streaming(){

        return view("streaming.php");

    }

    public function gallery(){

        return view("gallery.php");

    }


}
