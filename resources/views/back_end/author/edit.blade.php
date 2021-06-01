@extends('back_end.admin.home')
@section('title')
    <title>Trang chu</title>
@endsection
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('list.author')}}">Home</a></li>
                            {{--<li class="breadcrumb-item active" aria-current="page">Library</li>--}}
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <form method="post" class="form-horizontal" action="{{route('update.author',$auth->id)}}"
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Update Author</h5>
                        <div class="col-md-9">
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Name</label>
                                <div class="col-md-9">
                                    <input name="name" value="{{$auth->name}}" type="text" id="disabledTextInput"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Birthday</label>
                                <div class="col-md-9">
                                    <input name="birthday" value="{{$auth->birthday}}" type="date"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Product</label>
                                <div class="col-md-9">
                                    <input name="product" value="{{$auth->product}}" type="number"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Nationality</label>
                                <div class="col-md-9">
                                    <input name="nationality" value="{{$auth->nationality}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">File Upload</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input value="{{$auth->img}}" name="img" type="file"
                                               class="custom-file-input" id="validatedCustomFile">
                                        <img style="width: 200px" src="{{asset('storage/'.$auth->img)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
