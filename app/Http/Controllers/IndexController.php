<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index(){
                $viewData = [];
                $viewData['graphTitle'] = 'Prueba';
                $viewData['text'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat libero et 
                        urna pretium, ut tempor ex sagittis. Nunc in sollicitudin eros. Ut vel nisi non nisl interdum accumsan. 
                        Phasellus eget nisl ac nisi venenatis feugiat quis at augue. Maecenas porta ac dui eget euismod. 
                        Mauris auctor iaculis neque, sed sodales est. Sed sodales elementum dui ut malesuada.';


                $viewData['graph'] = ['title'=>'Comidas',
                                        'data'=>25,
                                        'data2'=>43,
                                        'data3'=>56];

                return view('layouts.index2')->with('viewData',$viewData);
        }
}
