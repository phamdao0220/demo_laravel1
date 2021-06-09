@extends('back_end.admin.home')
@section('title')
    <title>Trang chu</title>
@endsection
@section('search')
    <li class="nav-item search-box"><a class="nav-link waves-effect waves-dark"
                                       href="javascript:void(0)"><i class="ti-search"></i></a>
        <form action="{{route('search.book')}}" method="get" class="app-search position-absolute">
            <input type="text" name="search" class="form-control" placeholder="Search &amp; enter"> <a
                    class="srh-btn"><i class="ti-close"></i></a>
        </form>
    </li>
@endsection
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('add.book')}}">add</a></li>
                            {{--<li class="breadcrumb-item active" aria-current="page">Library</li>--}}
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-0">Books</h5>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Publishing Year</th>
                <th scope="col">Republish</th>
                <th scope="col">ISBN</th>
                <th scope="col">Recap</th>
                <th scope="col">Place Publication</th>
                <th scope="col">License</th>
                <th scope="col">Img</th>
                <th scope="col">Book Number</th>
                <th scope="col">Language</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Publishing Year</th>
                <th scope="col">Republish</th>
                <th scope="col">ISBN</th>
                <th scope="col">Recap</th>
                <th scope="col">Place Publication</th>
                <th scope="col">License</th>
                <th scope="col">Img</th>
                <th scope="col">Book Number</th>
                <th scope="col">Language</th>
                <th colspan="3">Action</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($books as $key => $book)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$book->name}}</td>
                    <td>{{$book->category_id}}</td>
                    <td>{{$book->author_id}}</td>
                    <td>{{$book->publishing_year}}</td>
                    <td>{{$book->republish}}</td>
                    <td>{{$book->isbn_id}}</td>
                    <td>{{$book->recap}}</td>
                    <td>{{$book->place_publication}}</td>
                    <td>{{$book->license}}</td>
                    <td><img width="100px" src="{{asset('storage/'.$book->img)}}"></td>
                    <td>{{$book->book_number}}</td>
                    <td>{{$book->language}}</td>

                    <td>
                        <a href="{{route('add.book')}}"><i class="fas fa-address-book"></i></a>
                    </td>
                        <a href="{{route('edit.book',$book->id)}}"><i class="fas fa-edit"></i>
                        </a>
                        <a onclick="return confirm('ban co chac muon xoa {{$book->name}} khong?? ')"
                           href="{{route('delete.book',$book->id)}}">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $books->links() }}
        </div>
    </div>

@endsection
