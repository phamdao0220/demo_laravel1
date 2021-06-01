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
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-0">Category</h5>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Product</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Product</th>
                <th colspan="3">Action</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($categories as $key => $category)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->product}}</td>
                    <td>
                        <a href="{{route('add.category')}}"><i class="fas fa-address-book"></i></a>
                        <a href="{{route('edit.category',$category->id)}}"><i class="fas fa-edit"></i>
                        </a>
                        <a onclick="return confirm('ban co chac muon xoa {{$category->name}} khong?? ')"
                           href="{{route('delete.category',$category->id)}}">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--<span>{!! $authors->links() !!}</span>--}}
        <nav aria-label="Page navigation">
        {!! $categories->links() !!}
        </nav>
    </div>

@endsection
