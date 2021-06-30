@extends('layouts.master')
@section('content')
    <div class="container">
    
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-3">Brand List</h1>  
              <hr/>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">SL.</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand Logo</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                       @foreach( $allbrand as $bran)
                        <tr>
                          <th scope="row">{{ $bran->id}}</th>
                            <td>{{ $bran->name}}</td>
                            <td> <img src="{{ asset('uploads/brand/'.$bran->image)}}" width ="50" height="50" />  </td>
                            <td>


                                    <form action="{{ route('brands.destroy', $bran->id)}}" method="post">
                                                @csrf
                                                 @method('DELETE')

                                        <a href="{{ route('brands.edit', $bran->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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