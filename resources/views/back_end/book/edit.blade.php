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
    <form method="post" class="form-horizontal" action="{{route('update.book',$books->id)}}"
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
                                    <input name="name" value="{{$books->name}}" type="text" id="disabledTextInput"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Category</label>
                                <div class="col-md-9">
                                    <select name="category_id" value="{{$books->category_id}}" type="text">
                                        <option>{{$books->category->name}}</option>
                                        @foreach($categorys as $category)
                                            <option @if($category->id === $books->category_id)
                                                    selected
                                                    @endif
                                                    value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Author</label>
                                <div class="col-md-9">
                                <select name="author_id"  value="{{$books->author_id}}" type="text">
                                    <option>{{$books->author->name}}</option>
                                    @foreach($authors as $author)
                                        <option @if($author->id === $books->author_id)
                                                selected
                                                @endif
                                                value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Publishing Year</label>
                                <div class="col-md-9">
                                    <input name="publishing_year" value="{{$books->publishing_year}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Republish</label>
                                <div class="col-md-9">
                                    <input name="republish" value="{{$books->republish}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">ISBN</label>
                                <div class="col-md-9">
                                    <input name="isbn_id" value="{{$books->isbn_id}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Recap</label>
                                <div class="col-md-9">
                                    <input name="recap" value="{{$books->recap}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Place Publication</label>
                                <div class="col-md-9">
                                    <input name="place_publication" value="{{$books->place_publication}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">License</label>
                                <div class="col-md-9">
                                    <input name="license" value="{{$books->license}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">File Upload</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input value="{{$books->img}}" name="img" type="file"
                                               class="custom-file-input" id="validatedCustomFile">
                                        <img style="width: 200px" src="{{asset('storage/'.$books->img)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Book Number</label>
                                <div class="col-md-9">
                                    <input name="book_number" value="{{$books->book_number}}" type="text"
                                           id="disabledTextInput" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="disabledTextInput">Language</label>
                                <div class="col-md-9">
                                    <input name="language" value="{{$books->language}}" type="text"
                                           id="disabledTextInput" class="form-control">
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
