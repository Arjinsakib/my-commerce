@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category Form</h4>
                    <hr>
                    <h1 class="text-center">{{Session::get('notification')}}</h1>
                    <form action="{{route('category.update',['id' => $category->id])}}" method="POST" enctype="multipart/form-data" class="form-horizontal p-t-20">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name*<span class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$category->name}}" name="name" id="exampleInputuname3" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Category Description*<span class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="{{$category->description}}" name="description" id="exampleInputEmail3" placeholder="Category Description">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Category Image</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-world"></i></span>
                                    <input type="file" name="image" accept="image/*" id="input-file-now" class="dropify"/>
                                    <img src="{{asset($category->image)}}" alt="" height="100" width=140">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" name="status" {{$category->status = 1 ? 'checked' : ''}} value="1">Published</label>
                                <label><input type="radio" name="status" {{$category->status = 2 ? 'checked' : ''}} value="2">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
