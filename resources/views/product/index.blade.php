@extends('layouts.master')
@section('content')
    <div class="container">
    
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-3">Product List</h1>  
              <hr/>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">SL.</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">Product Details</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach( $product as $pro)
                        <tr>
                          <th scope="row">{{ $pro->id}}</th>
                            <td>{{ $pro->product_name}}</td>
                            <td>{{ $pro->product_code}}</td>
                            <td>{{ $pro->price}}</td>
                            <td>{{ $pro->details}}</td>
                            <td> {{ $pro->image}} </td>
                            <td>


                                    <form action="{{ route('product.destroy', $pro->id)}}" method="post">
                                                @csrf
                                                 @method('DELETE')

                                        <a href="{{ route('product.edit', $pro->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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