<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getAllStudents(){
        return Student::all();
    }

    public function addStudent(){
        request() -> validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Broj indeksa' => 'required',
            'Godina studija' => 'required'
        ]);
        return Student::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Broj indeksa' => request('Broj indeksa'),
            'Godina studija' => request('Godina studija')
        ]);
    }

    public function editStudent(Student $student){
        request() -> validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Broj indeksa' => 'required',
            'Godina studija' => 'required'
        ]);
        
        $success = $student -> update([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Broj indeksa' => request('Broj indeksa'),
            'Godina studija' => request('Godina studija')
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function deleteStudent(Student $student){
        $success = $student -> delete();

        return [
            'success' => $success
        ];

    }

}
