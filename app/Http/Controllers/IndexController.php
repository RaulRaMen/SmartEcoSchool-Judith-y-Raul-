<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index($id){
                $viewData = [];
                switch($id){
                        case 1:
                                $viewData['graphsTitle'] = 'Ultimas 3 Mediciones';
                                $viewData['text'] = 'Estamos en el index 1';
                
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
                
                                
                                break;
                        case 2:
                                $viewData['graphsTitle'] = 'Electricidad';
                                $viewData['text'] = 'Estamos en el index 2';
                                break;
                                
                        
                }
                return view('index.index'.$id)->with('viewData',$viewData);
        }
}
