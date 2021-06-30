@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Add Slider</h3>
                            </div>
                            <hr/>
                       <div class="card-body">
                      

                            <form class="form-horizontal" role="form" action="{{ route('sliders.store')}}" method="post"  enctype="multipart/form-data">
                              @csrf
                        
                               <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Heading </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Heading" name="heading" class="form-control" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Description</label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Description" name="description" class="form-control" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Link</label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Link" name="link" class="form-control" value="" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Link Name</label>

                                    <div class="col-sm-9">
                                    <input type="text" id="form-field-1-1" placeholder="Link Name" name="link_name" class="form-control" value="" />
                                    </div>
                                </div>

                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Image </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                </div>  

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Status</label>

                                    <div class="col-sm-9">
                                    <input type="checkbox" id="form-field-1-1" name="status"  /> 0=visible, 1=hiddin
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