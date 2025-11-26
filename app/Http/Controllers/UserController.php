<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'nama' => 'Andi'],
            ['id' => 2, 'nama' => 'Budi'],
            ['id' => 3, 'nama' => 'Cici'],
        ];

        return $users;
    }
}
