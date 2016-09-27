<?php

namespace Charlie\Http\Controllers;

use Illuminate\Http\Request;

use Charlie\Http\Requests;

class CustomersController extends Controller
{
    public function index()
    {
        return 'Hello!';
    }

    public function get($id)
    {
        dd($id);
    }

    public function create()
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}
