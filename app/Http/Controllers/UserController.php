<?php

namespace App\Http\Controllers;



class UserController extends Controller
{
    function index() {
        return view('user.index');
        // to load page and only list user information, we need to pass data to view
    }
    function show($id) {
        return 'User id: ' . $id;
    }
}
