@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Add Category</h3>
                            </div>
                        <hr>
                       <div class="card-body">
                       <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">SL.</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datas)
                                <tr>
                                <th scope="row">{{ $datas->id }}</th>
                                <td>{{ $datas->category_name }}</td>
                                <td>{{ $datas->position }}</td>
                                <td>{{ $datas->image }}</td>
                                <td> 
                                   <form action="{{ route('category.destroy', $datas->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('category.edit', $datas->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>

                                
                                </td>
                                </tr>
                              @endforeach  
                            </tbody>
                            </table>
                            

                         </div>

                         </div>
               </div>
               
            </div>

    @endsection





