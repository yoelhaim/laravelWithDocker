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


        $user = [
            'name' => 'John Doe',
            'age' => 30,
            'hobbies' => ['Soccer', 'Video Games']
        ];
        return  view('test', [
            'user' => $user
        ]);
    }

}
