<?php

namespace App\Controllers;

use App\Core\App;

// most common practice is to start with namespace followed by use imports

class UsersController 
{

  public function index()
  {
    $users = App::get('database')->selectAll('users');

    return view('users', compact('users')); // compact same as 'users' => $users
  }

  public function store() 
  {
    //insert the user assoc with the request
    App::get('database')->insert('users', [
      'name' => $_POST['name'],
    ]);

    //redirect back to users
    //header('Location: /users');

    return redirect('users');
  }

}