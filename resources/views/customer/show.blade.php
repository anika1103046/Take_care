@extends('adminlte::page')
   
@section('title','Customer.Details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="#"
            enctype="multipart/form-data">
             @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" 
                    name='customer_name' placeholder="Customer Name"
                    value="{{$customer->customer_name}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="number" class="form-control" 
                    name='mobile_number' placeholder="Mobile Number"
                    value="{{$customer->mobile_number}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" 
                    name='customer_address' placeholder="Customer Address"
                    value="{{$customer->customer_address}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type</label>
                    <input type="text" class="form-control" 
                    name='customer_type'value="{{$customer->customer_type}}">
                 </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect2">Purchase Items</label>
                        <input type="text" class="form-control" 
                        name='purchase_items' value="{{$customer->purchase_items}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputState">Category</label>
                        <input type="text" class="form-control" 
                        name='product_category'value="{{$customer->product_category}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Purchase Amounts</label>
                    <input type="number" class="form-control" 
                    name='purchase_amounts' placeholder="Purchase Amounts"
                    value="{{$customer->purchase_amounts}}">
                </div>

            </form>

        </div>
    </div>
</div>
@endsection