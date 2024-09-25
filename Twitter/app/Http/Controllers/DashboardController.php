<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $users = [
            [
                "name" => "John Doe",
                "age" => 30,
            ],
            [
                "name" => "Jane Doe",
                "age" => 25,
            ],
            [
                "name" => "Jim Doe",
                "age" => 35,
            ],
            [
                "name" => "Jill Doe",
                "age" => 40,]


        ];

        return view(
            'dashboard',
            [
                'users' => $users
            ]


        );
    }
}
