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
            <h4 class="mb-0">Rejected Orders</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Rejected Orders</li>
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

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#restore{{$order->id}}">Restore</button>
                        </div>
                    </div><br>


            </div>
        </div>
    </div>
</div>

<!--Restore_modal -->
    <div class="modal fade" id="restore{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Restore {{$order->name}}'s Order!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('restoreOrder',$order->id)}}" method="post">

                        @csrf
                        Are You Sure For Restore "{{$order->name}}'s Order"?<br><br>
                        <input type="hidden" id="id" name="id" class="form-control" value="{{$order->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-primary">RESTORE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- row closed -->
@endsection
@section('js')

@endsection
