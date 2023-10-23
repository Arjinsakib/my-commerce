@extends('admin.master')

@section('title')
    Edit Product
@endsection

@section('body')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product Form</h4>
                    <hr>
                    <h1 class="text-center">{{ Session::get('notification') }}</h1>
                    <form action="{{ route('product.update',['id' => $product->id]) }}" method="POST" enctype="multipart/form-data"
                        class="form-horizontal p-t-20">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name*<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option value="" disabled Selected>--Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{ $category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub Category Name*<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sub_category_id" id="subCategoryId">
                                    <option value="" disabled Selected>--Select Sub Category --</option>
                                    @foreach ($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}" {{ $sub_category->id == $product->sub_Category_id ? 'selected' : ''}}>{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Brand Name<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id">
                                    <option value="" disabled Selected>--Select Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : ''}}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Unit Name<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="unit_id">
                                    <option value="" disabled Selected>--Select Unit --</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}" {{ $unit->id == $product->unit_id ? 'selected' : ''}}>{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Name<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$product->name}}" name="name" id=""
                                    placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Code<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$product->code}}" name="code" id="" placeholder="Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Model</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$product->model}}" name="model" id=""
                                    placeholder="Model Name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Stock Amount<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$product->stock_amount}}" name="stock_amount" id=""
                                    placeholder="Product Stock Amount" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Price<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{$product->regular_price}}" name="regular_price" id=""
                                        placeholder="Regular Price" />
                                    <input type="text" class="form-control" value="{{$product->selling_price}}" name="selling_price" id=""
                                        placeholder="Selling Price" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Short Description*<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="{{$product->short_description}}" name="short_description" id="exampleInputEmail3" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail34" class="col-sm-3 control-label">Long Description*<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" value="{{$product->long_description}}" name="long_description" id="exampleInputEmail34"
                                    placeholder="Long Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Feature Image<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-world"></i></span>
                                    <input type="file" name="image" accept="image/*" id="input-file-now"
                                        class="dropify" />
                                        <img src="{{asset($product->image)}}" alt="" height="100px" width="120px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Other Image<span
                                    class="text-denger"></span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-world"></i></span>
                                    <input type="file" name="other_image[]" accept="image/*" multiple id="input-file-now"
                                        class="dropify" />
                                        @foreach ($product->otherImages as $otherImage)
                                            <img src="{{asset($otherImage->image)}}" alt="" height="100px" width="120px">
                                        @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" {{$product->status == 1 ?  'checked' : ''}} name="status"
                                        value="1">Published</label>
                                <label><input type="radio" {{$product->status == 2 ? 'checked' : ''}} name="status" value="2">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                    New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
