@extends('layouts.master')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Product List</h1>
            <hr />
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL.</th>
                        <th scope="col">English Name</th>
                        <th scope="col">Bangla Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach( $products as $prod)
                    <tr>
                        <th scope="row">{{ $prod->id}}</th>
                        <td>{{ $prod->eng_name}}</td>
                        <td>{{ $prod->bang_name}}</td>
                        <td>{{ $prod->pro_code}}</td>
                        <td>{{ $prod->price}}</td>
                        <td> <img src="{{ asset('uploads/product/'.$prod->image)}}" width="50" height="50" /> </td>
                        <td>


                            <form action="{{ route('products.destroy', $prod->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('products.edit', $prod->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>


                        </td>
                        </th>

                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div>


</div>



@endsection