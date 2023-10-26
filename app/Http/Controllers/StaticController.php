<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



class StaticController extends Controller
{

    public function home()
    {
        return view('welcome');
    }
    public function test($cat =null, $item= null)
    {
        // $user = request('id');;


        $users = [
            '0' => [
                'name' => 'Youssef el haimer',
                'age' => 25,
                'city' => 'Khouribga'
            ],
            '1' => [
                'name' => 'youmer',
                'age' => 30,
                'city' => 'London'
            ],
            '2' => [
                'name' => 'youssef',
                'age' => 20,
                'city' => 'Paris'
            ],
            '3' => [
                'name' => 'el h',
                'age' => 200,
                'city' => 'Amrica'
            ],
        ];

        return  view('test', [
            'user' => $users
        ]);
    }

}
