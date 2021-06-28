@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card-header">
                <h3>Add Child SubCategory</h3>
            </div>

            <div class="card-body">

                <form class="form-horizontal" role="form" action="{{ route('childsubcategory.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Category Name</label>

                        <div class="col-sm-9">

                            <select class="form-select" aria-label="form-select-lg example" name="cate_id">
                                <option selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{ $category->category_name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Sub Category Name</label>

                        <div class="col-sm-9">

                            <select class="form-select" aria-label="form-select-lg example" name="subcate_id">
                                <option selected>Select SubCategory</option>
                                @foreach($child as $childern)
                                <option value="{{ $childern->id}}"> {{ $childern->subCat_name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Child SubCategory Name </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-1-1" placeholder="Text Field" name="name" class="form-control" value="" />
                        </div>
                    </div>



                    <!--                              <div class="form-group">  
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">SubCategory Image </label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                </div>   -->

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