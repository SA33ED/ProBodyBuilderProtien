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
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">ADD New Protien</button><br><br>

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
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit{{$protien->id}}">EDIT <i class="fa fa-edit"></i>
                            </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$protien->id}}">DELETE <i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- edit_modal -->
    <div class="modal fade" id="edit{{$protien->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        Edit
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- edit_form -->
                    <form action="{{route("protiensUpdate")}}" method="POST">
                        @csrf
                        <input id="id" type="hidden" name="protienid" class="form-control" value="{{$protien->id}}" required>
                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">Enter Protien Name
                                    :</label>
                                <input id="Name" type="text" name="name" class="form-control" value="{{$protien->name}}" required>
                            </div>
                            <div class="col">
                                <label for="price" class="mr-sm-2">Enter Protien Price
                                    :</label>
                                <input type="text" class="form-control" name="price" value="{{$protien->price}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id" value="">
                            <label for="exampleFormControlTextarea1">About
                                :</label>
                            <textarea class="form-control" name="about" id="exampleFormControlTextarea1"
                                rows="3" >{{$protien->about}}</textarea>
                        </div>
                        <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-success">SUBMIT</button>
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
                    <form action="{{route('deleteProtien',$protien->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        Are You Sure For DELETE "{{$protien->name}}"?<br><br>
                        <input type="hidden" id="id" name="id" class="form-control" value="{{$protien->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- row closed -->

    <!--ADD NEW PROTIEN  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">

                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{route("protienStore")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div>
                                <label for="formFileLg" class="form-label">Protien Image</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
                            </div>
                        <div class="row">
                            <div class="col">
                                <label for="name" class="mr-sm-2">Protien Name
                                    :</label>
                                <input id="Name" type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="price" class="mr-sm-2">Protien Price
                                    :</label>
                                <input type="text" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">About
                                :</label>
                            <textarea class="form-control" name="about" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-success">SUBMIT</button>
                </div>
                </form>

            </div>
        </div>
    </div>

<br>
@endsection
@section('js')

@endsection
{{-- <i class="fa fa-edit"> --}}
