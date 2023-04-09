@extends('dashboard.layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Incomming Orders</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Incomming Orders</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">


                    <div class="card">
                        <div class="card-header">
                            Order#{{$order->id}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><span style="color:red;">Customer Name:-</span> {{$order->name}}</h5>

                            <p class="card-text"><span style="color:red;">Phone Number :- </span>{{$order->phone}}</p><br>
                            <p class="card-text"><span style="color:red;">Adress :- </span>{{$order->address}}</p><br>
                            <p class="card-text"><span style="color:red;">Protien :- </span>{{$order->protien->name}}</p><br>
                            <p class="card-text"><span style="color:red;">Price :- </span>${{$order->protien->price}}</p><br>
                            <p class="card-text"><span style="color:red;">Quantity :- </span>{{$order->quantity}}</p><br>
                            <p class="card-text"><span style="color:red;">Message :- </span>{{$order->message}}</p><br>

                            <a href="{{route("showOrder",$order->id)}}" class="btn btn-warning">under processing</a>
                            <a href="{{route("showOrder",$order->id)}}" class="btn btn-danger">Decline</a>
                            <a href="{{route("showOrder",$order->id)}}" class="btn btn-success">Done</a>
                        </div>
                    </div><br>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
