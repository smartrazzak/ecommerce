@extends('layouts.master')
@section('content')
        <div class="container">

            <div class="row">
				<div class="col-xs-12">

                  <div class="card-header">
                     <h3>Site Configuration</h3>
                  </div>

                  <div class="card-body">

                    <!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form" action="{{ route('site-config', $contact->id) }}" method="post">
                        @csrf
                        @mathod('put')

                            <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Name </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="name" class="form-control" value="{{ $contact->name}}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Title </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="title" class="form-control" value="" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Email </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="email" class="form-control" value=""/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Mobile </label>

                                    <div class="col-sm-9">
                                        <input type="tel" id="form-field-1-1" placeholder="Text Field" name="mobile" class="form-control" value="" />
                                    </div>
                                </div>


                                <div class="form-group">  
                                   
                                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Address </label>
                                      <div class="col-sm-9">
                                          <textarea class="form-control" id="form-field-8" placeholder="Default Text" name="address" value=""></textarea>
                                    </div>
                              </div>  

                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Logo </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile">
                                      </div>
                                </div>  

                                <div class="form-group">  
                                   
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ficon </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile">
                                      </div>
                                </div>  

                                <div class="col-md-12 align-right">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>

                       

                 </form>

                  </div>



								

                    </div>
                </div>   
        </div>   


@endsection