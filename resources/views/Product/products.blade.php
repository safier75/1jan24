@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('product_send')}}" method="post" Id="product_form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
  <label for="Product_name" class="form-label">Product Name</label>
  <input type="name" name="Product_name" class="form-control" id="Product_name" placeholder="Product Name">
   
</div>
<div class="mb-3">
  <label for="Product_image" class="form-label">Product Image</label>
  <input class="form-control" type="file" id="Product_image" name="Product_image">
</div>
<div class="mb-3">
  <label for="Product_desc" class="form-label">Enter Description</label>
  <textarea class="form-control" name="Product_desc" id="Product_desc" rows="3"></textarea>
</div>
<div class="row mb-0">
                            <div class="col-md-12 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    Upload Product
                                </button>
                            </div>
                        </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
