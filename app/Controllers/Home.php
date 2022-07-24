<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SchoolModel;
use App\Models\StockModel;

class Home extends BaseController
{
    public function index()
    {
        $Userlist = new UserModel;
        $data = $Userlist->findAll();
        return view('pages/index', ['username' => $data]);
    }


    public function bill()
    {
        $sclmdl = new SchoolModel();
        $schools = $sclmdl->asArray()->findAll();

        $sid = session('sid');
        $p_model = new StockModel();
        $result = $p_model->asArray()->where('sid', $sid)->findAll();
        return view('pages/bill', ['schools' => $schools, 'result' => $result]);
    }
    public function inventory()
    {
        $sclmdl = new SchoolModel();
        $schools = $sclmdl->asArray()->findAll();

        $sid = session('sid');
        $p_model = new StockModel();
        $result = $p_model->asArray()->where('sid', $sid)->findAll();
        return view('pages/inventory', ['schools' => $schools, 'result' => $result]);
    }
    public function blank_page()
    {
        $sclmdl = new SchoolModel();
        $schools = $sclmdl->asArray()->findAll();

        $val = [];
        return view('pages/' . "blank_page", ['schools' => $schools, 'val' => $val]);
    }
    public function school_list()
    {
        $sclmdl = new SchoolModel();
        $schools = $sclmdl->asArray()->findAll();

        $sid = session('sid');
        $p_model = new StockModel();
        $result = $p_model->asArray()->where('sid', $sid)->findAll();
        return view('pages/school_list', ['schools' => $schools, 'result' => $result]);
    }
    public function chartjs()
    {
        return view('pages/' . "chartjs");
    }
    public function dropdowns()
    {
        return view('pages/' . "dropdowns");
    }
    public function error_404()
    {
        return view('pages/' . "error_404");
    }
    public function error_500()
    {
        return view('pages/' . "error_500");
    }
    public function login()
    {
        return view('pages/' . "login");
    }
    public function mdi()
    {
        return view('pages/' . "mdi");
    }
    public function register()
    {
        return view('pages/' . "register");
    }
    public function typography()
    {
        return view('pages/' . "typography");
    }
    public function add()
    {
        return view('pages/' . "add");
    }
    public function upload()
    {
        return view('pages/' . "upload");
    }
    public function display()
    {
        return view('pages/' . "display");
    }
    public function update()
    {
        return view('pages/' . "update");
    }
}
