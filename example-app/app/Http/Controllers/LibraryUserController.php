<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryUserController extends Controller
{
    protected $users = [
        ['username' => 'user1', 'first_name' => 'vasiliy', 'last_name' => 'pupkin', 'list_of_books' => ['Book1', 'Book3', 'Book4']],
        ['username' => 'user2', 'first_name' => 'vitaliy', 'last_name' => 'ivanov', 'list_of_books' => ['Book5', 'Book6', 'Book7']]
    ];

    public function show($id)
    {
        return view('user', ['user' => $this->users[$id]]);
    }
}

