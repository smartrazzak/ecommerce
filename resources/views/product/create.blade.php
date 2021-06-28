@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Add Product</h3>
                            </div>
                            <hr/>
                       <div class="card-body">
                      

                            <form class="form-horizontal" role="form" action="{{ route('product.store')}}" method="post" >
                              @csrf
                        
                               <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Product Name </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Product Name" name="product_name" class="form-control" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Product Code</label>

                                    <div class="col-sm-9">
                                        <input type="tel" id="form-field-1-1" placeholder="Product Code" name="product_code" class="form-control" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Product Price</label>

                                    <div class="col-sm-9">
                                        <input type="tel" id="form-field-1-1" placeholder="Product Price" name="price" class="form-control" value="" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Product Details</label>

                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="form-field-8" name="details" placeholder="Default Text" value=" " ></textarea>
                                    </div>
                                </div>

                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Product Image </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                </div>  

                                <div class="form-group ">
										<div class="col-md-12 text-right">
											<button class="btn btn-primary" type="submit">Submit</button>


										</div>
									</div>
                            </form>   

                            

                         </div>

                         </div>
               </div>
               
            </div>

    @endsection