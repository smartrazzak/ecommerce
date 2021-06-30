@extends('layouts.master')
@section('content')

<div class="container">
               <div class="row">
                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>SubCategory Lists</h3>
                            </div>
                        <hr>
                       <div class="card-body">
                       <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Sub Category Name</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $subcategory)
                                <tr>
                                <th scope="row">{{ $subcategory->id}}</th>
                                <td>{{ $subcategory->subCat_name}}</td>
                                <td> {{ $subcategory->category->category_name}} </td>
                                <td> <img src="{{ asset('uploads/subcategory/'.$subcategory->image)}}" width ="50" height="50" /></td>
                                <td>
                                   
                                   
                                   <form action="{{ route('subcategory.destroy', $subcategory->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <!-- <a href="{{ route('subcategory.edit', $subcategory->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
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





