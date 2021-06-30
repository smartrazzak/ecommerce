@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Add Brand</h3>
                            </div>
                            <hr/>
                       <div class="card-body">
                      

                            <form class="form-horizontal" role="form" action="{{ route('brands.store')}}" method="post" enctype="multipart/form-data" >
                              @csrf
                        
                               <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Brand Name </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Brand Name" name="name" class="form-control" value="" />
                                    </div>
                                </div>



                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Brand Logo</label>
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