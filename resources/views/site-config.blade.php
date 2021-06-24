@extends('layouts.master')
    @section('content')
            <div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Site Configuration</h3>
                            </div>

                    </div>

                    <div class="col-md-12">

                            <div class="card-body">

                            <form class="form-horizontal" role="form" action="{{ route('site-config.update', $contact->id)}}" method="post" >
                      @csrf
                        
                      
                               <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Name </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="name" class="form-control" value="{{ $contact->name}} />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Title </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="title" class="form-control" value="{{ $contact->title}} />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Email </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="email" class="form-control" value="{{ $contact->email}} />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Mobile </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" name="mobile" class="form-control" value="{{ $contact->mobile}} />
                                    </div>
                                </div>


                                <div class="form-group">  
                                   
                                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Address </label>
                                      <div class="col-sm-9">
                                          <textarea class="form-control" id="form-field-8" name="address" placeholder="Default Text" value="{{ $contact->address}}></textarea>
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

                               
                                  <button type="submit" class="btn btn-primary align-right">Edit</button>
                              

                             

                 </form>    

                            </div>

                    </div>



               </div>
               
            </div>

    @endsection