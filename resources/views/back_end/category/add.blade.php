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
                            <li class="breadcrumb-item"><a href="{{route('list.category')}}">Home</a></li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <form method="post" class="form-horizontal" action="{{route('store.category')}}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Add Category</h5>
                        <div class="col-md-9">
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Name</label>
                                <div class="col-md-9">
                                    <input name="name" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('name'))
                                        <div class="help-block  alert-danger">
                                            {!! $errors->first('name') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Product</label>
                                <div class="col-md-9">
                                    <input name="product" type="number" id="disabledTextInput" class="form-control">
                                    @if($errors->has('product'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('product') !!}
                                        </div>
                                    @endif
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
