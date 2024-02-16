<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index(){
                $viewData = [];
                $viewData['graphsTitle'] = 'Prueba';
                $viewData['text'] = '';

                $query = DB::select("SELECT consumo FROM measurements WHERE id_sensor = 1 ORDER BY fecha DESC LIMIT 3;");
                $viewData['graph'] = ['title'=>'Sensor 1',
                                        'data'=>$query[2]->consumo,
                                        'data2'=>$query[1]->consumo,
                                        'data3'=>$query[0]->consumo];

                $query = DB::select("SELECT consumo FROM measurements WHERE id_sensor = 2 ORDER BY fecha DESC LIMIT 3;");
                $viewData['graph2'] = ['title'=>'Sensor 2',
                                        'data'=>$query[2]->consumo,
                                        'data2'=>$query[1]->consumo,
                                        'data3'=>$query[0]->consumo];

                return view('index.index1')->with('viewData',$viewData);
        }
}
