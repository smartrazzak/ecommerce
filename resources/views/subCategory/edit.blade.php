@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Update SubCategory</h3>
                            </div>

                       <div class="card-body">

                            <form class="form-horizontal" role="form" action="{{ route('subcategory.update', $subcategories->id)}}" method="post" >
                              @csrf
                              @method('PUT')
                        
                               <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">SubCategory Name </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="subCat_name" class="form-control" value="{{ $subcategories->subCat_name}}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Category Name</label>

                                    <div class="col-sm-9">

                                    <select class="form-select" aria-label="form-select-lg example" name="cate_id">
                                    <option selected>Select Category</option>
                                    @foreach($subcategories as $category)
                                      <option value="{{ $category->id }}"> {{ $category->category_name}}</option>
                                    @endforeach
                                </select>

                                       <!-- form-select-lg mb-3 <input type="number" id="form-field-1-1" placeholder="number" name="number" class="form-control" value="" /> -->
                                    </div>
                                </div>

                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">SubCategory Image </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                </div>  

                                <div class="form-group ">
                                    <div class="col-md-12 text-right">
                                      <button class="btn btn-info" type="submit">Submit</button>
                                    </div>
								              	</div>
                            </form>    

                         </div>

                         </div>
               </div>
               
            </div>

    @endsection