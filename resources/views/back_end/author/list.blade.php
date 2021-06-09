@extends('back_end.admin.home')
@section('title')
    <title>Trang chu</title>

@endsection
@section('search')
    <li class="nav-item search-box"><a class="nav-link waves-effect waves-dark"
                                       href="javascript:void(0)"><i class="ti-search"></i></a>
        <form action="{{route('search.author')}}" method="get" class="app-search position-absolute">
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
                            {{--<li class="breadcrumb-item"><a href="{{route('add.author')}}">add</a></li>--}}
                            {{--<li class="breadcrumb-item active" aria-current="page">Library</li>--}}
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-0">Authors</h5>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Product</th>
                <th scope="col">Nationality</th>
                <th scope="col">Img</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Product</th>
                <th scope="col">Nationality</th>
                <th scope="col">Img</th>
                <th colspan="3">Action</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($authors as $key => $author)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$author->name}}</td>
                    <td>{{$author->birthday}}</td>
                    <td>{{$author->product}}</td>
                    <td>{{$author->nationality}}</td>
                    <td><img width="100px" src="{{asset('storage/'.$author->img)}}"></td>
                    <td>
                        <a href="{{route('add.author')}}"><i class="fas fa-address-book"></i></a>
                        <a href="{{route('edit.author',$author->id)}}"><i class="fas fa-edit"></i>
                        </a>
                        <a onclick="return confirm('ban co chac muon xoa {{$author->name}} khong?? ')"
                           href="{{route('delete.author',$author->id)}}">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $authors->links() }}
        </div>
    </div>

@endsection
