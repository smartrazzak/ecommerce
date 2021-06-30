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
                        <th scope="col">Slider Heading</th>
                        <th scope="col">Slider Description</th>
                        <th scope="col">Link</th>
                        <th scope="col">Link Name</th>
                        <th scope="col">Slider Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach( $slider as $pro)
                        <tr>
                          <th scope="row">{{ $pro->id}}</th>
                            <td>{{ $pro->heading}}</td>
                            <td>{{ $pro->description}}</td>
                            <td>{{ $pro->link}}</td>
                            <td>{{ $pro->link_name}}</td>
                            <td> <img src="{{ asset('uploads/slider/'.$pro->image)}}" width ="50" height="50" /> </td>
                            <td>


                                    <form action="{{ route('sliders.destroy', $pro->id)}}" method="post">
                                                @csrf
                                                 @method('DELETE')

                                        <a href="{{ route('sliders.edit', $pro->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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