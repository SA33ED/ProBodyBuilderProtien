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
            <h4 class="mb-0"><span style="color:red;">DELETED</span> Protiens</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active"><span style="color:red;">DELETED</span> Protiens</li>
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
                    <div class="card-body">
                        <h5 class="card-title">{{$protien->name}}</h5>
                        <h5 class="card-title">${{$protien->price}}</h5>
                        <p class="card-text">{{$protien->about}}</p>
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$protien->id}}">Restore</i>
                            </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$protien->id}}">FORCE DELETE <i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- edit_modal_protien -->
    <div class="modal fade" id="edit{{$protien->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        Are You Sure For Restore "{{$protien->name}}"?
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- restore_form -->
                    <form action="{{route('restoreProtien',$protien->id)}}" method="POST">
                        @csrf
                        <input id="id" type="hidden" name="protienid" class="form-control" value="{{$protien->id}}" required>
                        <div style="text-align: center;">
                            <img src="{{asset('img/' . $protien->image)}}" style="width:150px">
                        </div>
                        <div class="form-group">


                        </div>
                        <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-primary">RESTORE</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>

    <!--delete_Modal_protien -->
    <div class="modal fade" id="delete{{$protien->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DELETE {{$protien->name}}!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('forceDeleteProtien',$protien->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        Are You Sure For DELETE "{{$protien->name}}"?<br><br>
                        <input type="hidden" id="id" name="id" class="form-control" value="{{$protien->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-danger">FORCE DELETE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- row closed -->



<br>
@endsection
@section('js')

@endsection
{{-- <i class="fa fa-edit"> --}}
