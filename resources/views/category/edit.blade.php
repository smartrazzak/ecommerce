@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Update Category</h3>
                            </div>

                       <div class="card-body">

                            <form class="form-horizontal" role="form" action="{{ route('category.update', $categories->id)}}" method="post" >
                              @csrf
                              @method('PUT')
                        
                               <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Category Name </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="category_name" class="form-control" value="{{ $categories->category_name }}" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Category Position</label>

                                    <div class="col-sm-9">
                                        <input type="tel" id="form-field-1-1" placeholder="number" name="position" class="form-control" value="{{ $categories->position }}" />
                                    </div>
                                </div>

                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Category Image </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile" name="image" value="{{ $categories->image }}">
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