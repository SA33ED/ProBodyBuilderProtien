@extends('dashboard.layouts.master')
@section('css')

@section('title')
    Protiens
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Protiens</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Protiens</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

    @foreach ($protiens as $protien)
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
        <div class="col">
            <div class="card"><br>
                <div style="text-align: center;">
                    <img src="{{asset("img/" . $protien->image)}}" class="card-img-top" alt="..."  style="width:200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$protien->name}}</h5>
                    <h5 class="card-title">${{$protien->price}}</h5>
                    <p class="card-text">{{$protien->about}}</p>
                </div>
            </div>
        </div>
    </div><br>

@endforeach
<!-- row closed -->
<br>
@endsection
@section('js')

@endsection
