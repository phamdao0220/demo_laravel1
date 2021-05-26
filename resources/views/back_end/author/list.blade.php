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
                            <li class="breadcrumb-item"><a href="{{route('add.author')}}">add</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-0">Tac gia</h5>
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
                <th colspan="2">Action</th>
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
                <th colspan="2">Action</th>
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
                        <a href="{{route('edit.author',$author->id)}}"><i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a onclick="return confirm('ban co chac muon xoa {{$author->name}} khong?? ')"
                           href="{{route('delete.author',$author->id)}}">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            {!! $authors->links() !!}
        </nav>
    </div>

@endsection
