<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public  $users = [
            ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Senior Manager'],
            ['name' => 'Davide', 'surname' => 'Bianchi', 'role' => 'HR'],
            ['name' => 'Alessia', 'surname' => 'Verdi', 'role' => 'Senior Developer'],
        ];
    public function homepage()
    {
        return view('welcome');
    }

    public function chiSiamo()
    {
       
        return view('chiSiamo', ['users' => $this->users]);
    }

    public  function chiSiamoDetail($name)
    {
        
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('chi-siamo-detail', ['user' => $user]);
            }
        }
    }

    public function contatti()
    {
        return view('contatti');
    }

   
}
