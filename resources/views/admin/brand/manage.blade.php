@extends('admin.master')

@section('title')
Manage Category
@endsection

@section('body')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <div class="table-responsive m-t-40">
                        <p class="text-center text-success">{{Session::get('notification')}}</p>
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->description}}</td>
                                    <td><img src="{{asset('/')}}{{$brand->image}}" alt="{{$brand->image}}" height="80" width="100"/></td>
                                    <td>{{$brand->status == 1? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('category.edit',['id'=> $brand->id])}}" class="btn btn-success btn-sm">
                                            <i class="ti-agenda"></i>
                                        </a>
                                        <a href="{{route('category.delete',['id'=> $brand->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?');">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
