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
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <form method="post" class="form-horizontal" action="{{route('store.author')}}"  enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Personal Info</h4>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3 text-end control-label col-form-label"> Name</label>
                <div class="col-sm-9">
                    <input name="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Birthday</label>
                <div class="col-sm-9">
                    <input name="birthday" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname"
                       class="col-sm-3 text-end control-label col-form-label">Product</label>
                <div class="col-sm-9">
                    <input name="product" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email1"
                       class="col-sm-3 text-end control-label col-form-label">Nationality</label>
                <div class="col-sm-9">
                    <input name="nationality" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3">File Upload</label>
                <div class="col-md-9">
                    <div class="custom-file">
                        <input name="img" type="file" class="custom-file-input" id="validatedCustomFile"
                               required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose
                            file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>

            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>


@endsection
