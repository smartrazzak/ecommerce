@extends('layouts.master')
@section('content')
        <form action="{{ route('cateogry.store') }}" method="Post">
            <div class="form-group">
                <label for="cateogry_name">Cateogry Name</label>
                <input type="text" class="form-control" id="category_name" name="cateogry_name" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


@endsection