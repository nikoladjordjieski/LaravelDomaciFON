<?php

namespace App\Http\Controllers;

use App\Models\Ispit;
use Illuminate\Http\Request;

class IspitController extends Controller
{
    public function getAllIspits(){
        $data = Ispit::join('students', 'students.id','=','ispits.Student')
                        ->get(['ispits.Predmet','ispits.Rezultat','students.Ime','students.prezime','students.Godina studija']);
        
        return $data;
    }

    public function addIspit(){
        request() -> validate([
            'Predmet' => 'required',
            'Rezultat' => 'required',
            'Student' => 'required'
        ]);
        return Ispit::create([
            'Predmet' => request('Predmet'),
            'Rezultat' => request('Rezultat'),
            'Student' => intval(request('Student'))
        ]);
    }

}
