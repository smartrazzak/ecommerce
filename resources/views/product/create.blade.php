@extends('layouts.master')
@section('content')
    <div class="container"> 
              
                                <h3>Add Product</h3>
                            
          
                   
				   <hr/>

                <div class="row">
 <!-- INPUTS -->
 <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row" style="width: 100%; margin: 0 0 20px !important;">
                        <div class="col-md-6 px-4">

                                <!-- Product Name English -->
                                <div class="form-group row">
                                   <label class="col-sm-3 control-label" for="name">
                                       English Name <sup class="text-danger">*</sup>
                                    </label>

                                    <div class="col-sm-9">
                                        <input id="name" name="eng_name" type="text" required class="form-control input-sm" placeholder="Product English Name" value="">
                                    </div>
                                </div>

                             <!-- Product Name Bangla  -->
                             <div class="form-group row">
                                <label class="col-sm-3 control-label" for="name"> Bangla Name<sup class="text-danger">*</sup></label>

                                <div class="col-sm-9">
                                    <input id="name" name="bang_name" type="text" required class="form-control input-sm" placeholder="Product Bangla Name" value="">
                                </div>
                            </div>

                             <!-- Product Category -->
                             <div class="form-group row">
                                <label class="col-sm-3 control-label" for="name">Product Category</label>

                                <div class="col-sm-9">
                                   <select class="form-control" name="cate_id">
                                   <option selected>----Select Category----</option>
                                   @foreach($categories as $category)
                                      <option value="{{ $category->id }}"> {{ $category->category_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Product Sub Category -->
                            <div class="form-group row">
                                <label class="col-sm-3 control-label" for="name">Sub Category</label>

                                <div class="col-sm-9">
                                   <select class="form-control" name="subcate_id">
                                   
                                      <option>----select SubCategory----</option>

                                     @foreach($child as $category)
                                      <option value="{{ $category->id }}"> {{ $category->subCat_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                             <!-- Product Brand Name -->
                             <div class="form-group row">
                                <label class="col-sm-3 control-label" for="name">Brand Name</label>

                                <div class="col-sm-9">
                                   <select class="form-control" name="brand_id">
                                   <option>----Select Brand Name----</option>
                                   @foreach($brand as $brand)
                                      <option value="{{ $brand->id }}">{{ $brand->name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>                           

                             
                                 <!-- Product Description -->
                              <div class="form-group row">
                                        <label class="col-sm-3 control-label" for="description">Description</label>
                                     <div class="col-sm-9">
                                        <textarea name="description" id="description" rows="6" class="form-control"></textarea>
                                     </div>  
                                </div>                                



                        </div>



                        <div class="col-md-6 px-4">


                            <!-- Product Price -->
                            <div class="form-group row">
                                   <label class="col-sm-3 control-label" for="name">SKU/Product Code<sup class="text-danger">*</sup> </label>

                                    <div class="col-sm-9">
                                        <input id="product_code" name="pro_code" type="number" required class="form-control input-sm" placeholder="Product Code" value="">
                                    </div>
                            </div>


                            <!-- Product Price -->
                            <div class="form-group row">
                                   <label class="col-sm-3 control-label" for="name">Product Price<sup class="text-danger">*</sup> </label>

                                    <div class="col-sm-9">
                                        <input id="product_price" name="price" type="number" required class="form-control input-sm" placeholder="Product Price" value="">
                                    </div>
                                </div>

                                <!-- Product Price -->
                                <div class="form-group row">
                                   <label class="col-sm-3 control-label" for="name">Discount Price</label>

                                    <div class="col-sm-9">
                                        <input id="discount" name="discount" type="number"  class="form-control input-sm" placeholder="Discount Price" value="">
                                    </div>
                                </div>

                                <!-- Product Quantity -->
                                <div class="form-group row">
                                   <label class="col-sm-3 control-label" for="name">Quantity</label>

                                    <div class="col-sm-9">
                                        <input id="discount" name="discount" type="number"  class="form-control input-sm" placeholder="Discount Price" value="">
                                    </div>
                                </div>


                                <!-- Product Size-->
                                <div class="form-group row">
                                   <label class="col-sm-3 control-label" for="name">Product Size</label>

                                    <div class="col-sm-9">
                                        <input id="discount" name="size" type="text"  class="form-control input-sm" placeholder="Discount Price" value="">
                                    </div>
                                </div>


                                <!-- Product Price -->
                                <div class="form-group row">
                                      <label class="col-sm-3 control-label" for="name">Product Image</label>
                                      <div class="col-sm-9">
                                        <label class="ace-file-input ace-file-multiple"><input type="file" name="image" id="id-input-file-2"><span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                    </div>
                                </div>


   



                            
                        </div>
                            


                            <!-- Submit -->
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                   

                       			
							  
				</div>
        </div>				


    @endsection