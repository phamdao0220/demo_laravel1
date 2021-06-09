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
                            <li class="breadcrumb-item"><a href="{{route('list.book')}}">Home</a></li>
                            {{--<li class="breadcrumb-item active" aria-current="page">Library</li>--}}
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <form method="post" class="form-horizontal" action="{{route('store.book')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Add Book</h5>
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
                                <label class="col-md-3" for="disabledTextInput">Category</label>
                                <div class="col-md-9">
                                    {{--<input name="category_id" type="text" id="disabledTextInput" class="form-control">--}}
                                    @if($errors->has('category_id'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('category_id') !!}
                                        </div>
                                    @endif
                                    <select name="category_id" >
                                        @foreach($categorys as $category)
                                            <option name="category_id" value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Author</label>
                                <div class="col-md-9">
                                    {{--<input name="author_id" type="text" id="disabledTextInput" class="form-control">--}}
                                    @if($errors->has('author_id'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('author_id') !!}
                                        </div>
                                    @endif
                                    <select name="author_id" >
                                        @foreach($authors as $author)
                                            <option name="author_id" value="{{$author->id}}">{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Publishing Year</label>
                                <div class="col-md-9">
                                    <input name="publishing_year" type="date" id="disabledTextInput" class="form-control">
                                    @if($errors->has('publishing_year'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('publishing_year') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Republish</label>
                                <div class="col-md-9">
                                    <input name="republish" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('republish'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('republish') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">ISBN</label>
                                <div class="col-md-9">
                                    <input name="isbn_id" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('isbn_id'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('isbn_id') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Recap</label>
                                <div class="col-md-9">
                                    <input name="recap" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('recap'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('recap') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Place Publication</label>
                                <div class="col-md-9">
                                    <input name="place_publication" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('place_publication'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('place_publication') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">License</label>
                                <div class="col-md-9">
                                    <input name="license" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('license'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('bilicenserthday') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">File Upload</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="img" type="file"
                                               class="custom-file-input" id="validatedCustomFile">
                                        @if($errors->has('img'))
                                            <div class="help-block alert-danger">
                                                {!! $errors->first('img') !!}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Book Number</label>
                                <div class="col-md-9">
                                    <input name="book_number" type="number" id="disabledTextInput" class="form-control">
                                    @if($errors->has('book_number'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('book_number') !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Language</label>
                                <div class="col-md-9">
                                    <input name="language" type="text" id="disabledTextInput" class="form-control">
                                    @if($errors->has('language'))
                                        <div class="help-block alert-danger">
                                            {!! $errors->first('language') !!}
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
