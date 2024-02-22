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
                                $query = DB::select("SELECT consumo,fecha FROM measurements WHERE id_sensor = 1 ORDER BY fecha DESC LIMIT 102;");
                                foreach ($query as $data){
                                        $viewData['graph']['data'][] = [str_replace("-","",explode(" ",$data->fecha)[0]),$data->consumo];
                                        /*$fecha=explode(" ",$data->fecha)[0];
                                        $fecha = explode("-",$fecha);
                                        $viewData['graph']['data'][] = [[$fecha[2],$fecha[1],$fecha[0]],$data->consumo];*/
                                }
                                break;
                        case 3:
                                $viewData['graphsTitle'] = 'La idea es que fuera de agua o mixta pero como no hay datos es de electricidad';
                                $viewData['text'] = 'Estamos en el index 3';

                                $query = DB::select("SELECT m.id_sensor, m.consumo, CONCAT(YEAR(m.fecha), '-', LPAD(MONTH(m.fecha), 2, '0')) AS fecha FROM measurements m INNER JOIN 
                                (SELECT MAX(fecha) AS ultima_fecha FROM measurements WHERE id_sensor = 1 GROUP BY YEAR(fecha), MONTH(fecha)) AS ultimas_fechas 
                                ON m.fecha = ultimas_fechas.ultima_fecha WHERE m.id_sensor = 1 ORDER BY m.fecha ASC;");

                                $base=0;
                                foreach ($query as $data){
                                        $base = $data->consumo-$base;
                                        $viewData['data']['electricidad'][] = [$base,$data->fecha];
                                };

                                break;
                        case 4:
                                $viewData['graphsTitle'] = 'uwu';
                                $viewData['text'] = 'Estamos en el index 4';

                                $query = DB::select("SELECT  m.id_sensor,  m.consumo,  m.fecha FROM measurements m INNER JOIN ( SELECT MAX(fecha) AS ultima_fecha FROM measurements 
                                WHERE id_sensor = 1 GROUP BY YEARWEEK(fecha) ) AS ultimas_fechas ON m.fecha = ultimas_fechas.ultima_fecha WHERE m.id_sensor = 1 ORDER BY m.fecha DESC;");

                                foreach ($query as $data) $viewData['data'][] = [$data->consumo,$data->fecha];
                                
                                //----------------------------------

                                $query = DB::select("SELECT m.id_sensor, m.consumo, YEAR(m.fecha) AS fecha FROM measurements m INNER JOIN ( SELECT MAX(fecha) AS ultima_fecha FROM measurements 
                                WHERE id_sensor = 1 GROUP BY YEAR(fecha) ) AS ultimas_fechas ON m.fecha = ultimas_fechas.ultima_fecha WHERE m.id_sensor = 1 ORDER BY m.fecha DESC;");

                                foreach ($query as $data) $viewData['data1'][] = [$data->consumo,$data->fecha];
                                
                                //----------------------------------

                                $query = DB::select("SELECT m.id_sensor, m.consumo, CONCAT(YEAR(m.fecha), '-', LPAD(MONTH(m.fecha), 2, '0')) AS fecha FROM measurements m INNER JOIN ( SELECT MAX(fecha) AS ultima_fecha 
                                FROM measurements WHERE id_sensor = 1 GROUP BY YEAR(fecha), MONTH(fecha) ) AS ultimas_fechas ON m.fecha = ultimas_fechas.ultima_fecha WHERE m.id_sensor = 1 ORDER BY m.fecha DESC;");

                                foreach ($query as $data) $viewData['data2'][] = [$data->consumo,$data->fecha];
                                
                                //----------------------------------

                                $query = DB::select("SELECT m.id_sensor, m.consumo, YEAR(m.fecha) AS fecha FROM measurements m INNER JOIN ( SELECT MAX(fecha) AS ultima_fecha FROM measurements WHERE id_sensor = 2 
                                GROUP BY YEAR(fecha) ) AS ultimas_fechas ON m.fecha = ultimas_fechas.ultima_fecha WHERE m.id_sensor = 2 ORDER BY m.fecha DESC;");

                                foreach ($query as $data) $viewData['data3'][] = [$data->consumo,$data->fecha];

                                
                                break;
                        
                }
                return view('index.index'.$id)->with('viewData',$viewData);
        }
}
