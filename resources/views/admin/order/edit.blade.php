@extends('admin.master')

@section('title')
Manage Category
@endsection

@section('body')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Information</h4>
                    <hr>
                    @if (Session::get('noti'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('noti')}}</strong>
                            <button type="button" class="btn-close" date-bs-dismis="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    @if (Session::get('mess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('mess')}}</strong>
                            <button type="button" class="btn-close" date-bs-dismis="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{route("admin.order.update",['id'=> $order->id])}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Customer Info</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly value="{{$order->customer->name.'('.$order->customer->mobile.')'}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Order ID</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly value="{{$order->id}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Order Total</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly value="{{$order->order_total}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Order Status</label>
                            <div class="col-md-9">
                                <select class="form-control" name="order_status">
                                    <option value="Pending" {{$order->order_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="Processing" {{$order->order_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$order->order_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                    <option value="Cancel" {{$order->order_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Delivery Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Update Order</label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-info w-100" value="Update Order"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
