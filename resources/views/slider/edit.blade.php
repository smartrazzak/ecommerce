@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Edit Slider</h3>
                            </div>
                            <hr/>
                       <div class="card-body">
                      

                            <form class="form-horizontal" role="form" action="{{ route('sliders.update', $slider->id)}}" method="post" enctype="multipart/form-data" >
                              @csrf
                              @Method('PUT')
                        
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Heading </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" name="heading" class="form-control" value="{{ $slider->heading}}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Slider Description</label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" name="description" class="form-control" value="{{ $slider->description}}" />
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
                                          <input class="form-control" type="file" id="formFile" name="image" value="{{ $slider->image}}">
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