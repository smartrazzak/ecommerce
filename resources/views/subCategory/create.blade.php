@extends('layouts.master')
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-sm-12">
          <div class="card-head">
            <h1 class="display-3">Add SubCategory</h1> 
          </div>
            

        </div>   
       
       <div class="card-body">
       
        <form action="{{ route('subcategory.store') }}" method="Post">
          @csrf
            <div class="form-group">
                <label for="cateogry_name">SubCateogry Name</label>
                <input type="text" class="form-control" id="subcategory_name" name="subcateogry_name" >
            </div>

            <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example">
                <option selected>Select Category Menu</option>
                <option value="1">Men Items</option>
                <option value="2">Women Items</option>
                <option value="3">Child Items</option>
            </select>

            <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Image:</strong>
                            <input type="file" id="id-input-file-2" />
                        </div>
             </div>

             

             <div class="form-group">
                <label for="cateogry_name">Slug Name</label>
                <input type="hidden" id="slug_name" name="slug_name" value="">
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div> 
        </div>
</div>   


@endsection