<?php

namespace App\Controllers;
use App\Models\UserModel;
class Home extends BaseController
{
    public function index()
    {
        $Userlist = new UserModel;
        $data = $Userlist->findAll();
        return view('pages/index',['username' => $data]);
    }


    public function basic_elements()
    {
        return view('pages/'."basic_elements");
    }
    public function basic_table()
    {
        return view('pages/'."basic_table");
    }
    public function blank_page()
    {
        return view('pages/'."blank_page");
    }
    public function school_list()
    {
        return view('pages/'."school_list");
    }
    public function chartjs()
    {
        return view('pages/'."chartjs");
    }
    public function dropdowns()
    {
        return view('pages/'."dropdowns");
    }
    public function error_404()
    {
        return view('pages/'."error_404");
    }
    public function error_500()
    {
        return view('pages/'."error_500");
    }
    public function login()
    {
        return view('pages/'."login");
    }
    public function mdi()
    {
        return view('pages/'."mdi");
    }
    public function register()
    {
        return view('pages/'."register");
    }
    public function typography()
    {
        return view('pages/'."typography");
    }
    public function add()
    {
        return view('pages/'."add");
    }
    public function upload()
    {
        return view('pages/'."upload");
    }
    public function display()
    {
        return view('pages/'."display");
    }
    public function update()
    {
        return view('pages/'."update");
    }
}
