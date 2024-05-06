<?php

namespace app\controllers;

use app\database\models\Medico;
use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;

class DoctorController 
{
    public function index() 
    {
        if(Session::has('admin')) {
            $doctors = new Medico;
            $doctors = $doctors->fetchAll();
            View::render('dashboard/medicos', ['doctors' => $doctors]);
        }else {
            Request::to('/');
        }
    }

    public function store() 
    {
        if(Session::has('admin')) {
            View::render('dashboard/adddoctor');
        }else {
            Request::to('/');
        }
    }

    public function create() 
    {
        $doctor = new Medico;
        $created = $doctor->create(Request::oll());
        if($created) {
            Request::to('/doctors');
        }
        
    }

    public function delete(int $id) 
    {
        $doctor = new Medico;
        $deleted = $doctor->delete('id', $id);

        if($deleted) {
            Session::flash('success', 'Campo excluído com sucesso!');
            Request::to('/doctors');
        }else {
            Session::flash('error', 'Falha ao excluir!');
            Request::to('/doctors');
        }
    }
}