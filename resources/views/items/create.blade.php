@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add New Item
                </div>

                <div class="card-body ">
                    <form action="{{url('items')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label for="name">Name: </label>
                                    <input type="text" class="form-control" id="name" name="name" v-model="name">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                            </div>
                       
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label for="brand">Brand: </label>
                                    <input type="text" class="form-control" id="brand" name="brand">
                                    <span class="text-danger">{{ $errors->first('brand') }}</span>

                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <label for="desc">Description: </label>
                                    <input type="text" class="form-control" id="desc" name="desc">
                                    <span class="text-danger">{{ $errors->first('desc') }}</span>

                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                
                                <div class="form-group">
                                    <label for="purchase_mrp">Purchase MRP: </label>
                                    <input type="text" class="form-control" id="purchase_mrp" name="purchase_mrp">
                                    <span class="text-danger">{{ $errors->first('purchase_mrp') }}</span>

                                </div>

                            </div>


                            <div class="col-md-3">
                                
                                <div class="form-group">
                                    <label for="purchase_rate">Purchase Rate: </label>
                                    <input type="text" class="form-control" id="purchase_rate" name="purchase_rate">
                                    <span class="text-danger">{{ $errors->first('purchase_rate') }}</span>

                                </div>

                            </div>


                            <div class="col-md-3">
                                
                                <div class="form-group">
                                    <label for="sale_mrp">Sale MRP: </label>
                                    <input type="text" class="form-control" id="sale_mrp" name="sale_mrp">
                                    <span class="text-danger">{{ $errors->first('sale_mrp') }}</span>

                                </div>

                            </div>


                            <div class="col-md-3">
                                
                                <div class="form-group">
                                    <label for="sale_rate">Sale Rate: </label>
                                    <input type="text" class="form-control" id="sale_rate" name="sale_rate">
                                    <span class="text-danger">{{ $errors->first('sale_rate') }}</span>
                                    
                                </div>

                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-md-12 ">
                                
                                <button class="btn btn-primary float_right" type="submit">Save</button>

                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection