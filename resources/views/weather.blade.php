@extends('template')
@section('content')
    <div class="row">
        <div class="col col-12 text-center m-md-3"><h2>Warsaw</h2></div>
                <div class=" col-sm-4 col-xs-12  text-sm-right"> <h6>Temperature now: <span class="font-weight-bold">{{$temp}}℃</span></h6></div>
        <div class=" col-sm-4 col-xs-12 text-sm-center"> <h6>wind speed:  <span class="font-weight-bold">{{$wind}} m/s</span></h6></div>
        <div class=" col-sm-4 col-xs-12 text-sm-left"> <h6>
                Last sync:  <span class="font-weight-bold">{{$date}} minutes ago </span></h6></div>
    </div>
@endsection