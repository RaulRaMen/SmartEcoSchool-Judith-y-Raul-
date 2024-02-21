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
                                $viewData['text'] = 'Gráfica de la luz y del agua';
                
                                $query = DB::select("SELECT consumo FROM measurements WHERE id_sensor = 1 ORDER BY fecha DESC LIMIT 3;");
                                $viewData['graph'] = ['title'=>'Agua',
                                                        'data'=>$query[2]->consumo,
                                                        'data2'=>$query[1]->consumo,
                                                        'data3'=>$query[0]->consumo];
                
                                $query = DB::select("SELECT consumo FROM measurements WHERE id_sensor = 2 ORDER BY fecha DESC LIMIT 3;");
                                $viewData['graph2'] = ['title'=>'Luz',
                                                        'data'=>$query[2]->consumo,
                                                        'data2'=>$query[1]->consumo,
                                                        'data3'=>$query[0]->consumo];
                                break;
                        case 2:
                                $viewData['graphsTitle'] = 'Electricidad';
                                $viewData['text'] = 'Estamos en el index 2';
                                $query = DB::select("SELECT consumo,fecha FROM measurements WHERE id_sensor = 2 ORDER BY fecha DESC LIMIT 102;");
                                foreach ($query as $data){
                                        $viewData['graph']['data'][] = [str_replace("-","",explode(" ",$data->fecha)[0]),$data->consumo];
                                        /*$fecha=explode(" ",$data->fecha)[0];
                                        $fecha = explode("-",$fecha);
                                        $viewData['graph']['data'][] = [[$fecha[2],$fecha[1],$fecha[0]],$data->consumo];*/
                                }
                                break;
                        case 3:
                                $viewData['graphsTitle'] = 'Se ve como electricidad pero es agua';
                                $viewData['text'] = 'Estamos en el index 3';
                                
                                break;
                                
                        
                }
                return view('index.index'.$id)->with('viewData',$viewData);
        }
}
