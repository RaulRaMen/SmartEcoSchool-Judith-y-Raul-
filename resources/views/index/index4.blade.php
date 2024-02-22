@extends('layouts.index4')
@section('graphTitle',$viewData['graphsTitle'])
@section('text',$viewData['text'])
{{print_r($viewData['data'])}}
<br><hr><hr><br>
{{print_r($viewData['data1'])}}
<br><hr><hr><br>
{{print_r($viewData['data2'])}}
<br><hr><hr><br>
{{print_r($viewData['data3'])}}
@section('graph')

@endsection