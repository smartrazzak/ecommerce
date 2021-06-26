@extends('layouts.master')
@section('content')
    <div class="container">
    
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Product</h1>  

                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">Product Details</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>T-Shirt</td>
                        <td>101</td>
                        <td>150</td>
                        <td>Cotton T-shirt</td>
                        <td>tshirt.jpg</td>
                        <td>

                        <a class="btn btn-info" href="#"> Show</a>
                        <a class="btn btn-primary" href="#"> Edit</a>
                        <a class="btn btn-danger" href="#"> Delete</a>
                        
                        
                        </td>

                        </tr>

                        <tr>
                        <th scope="row">1</th>
                        <td>T-Shirt</td>
                        <td>101</td>
                        <td>150</td>
                        <td>Cotton T-shirt</td>
                        <td>tshirt.jpg</td>
                        <td>

                        <a class="btn btn-info" href="#"> Show</a>
                        <a class="btn btn-primary" href="#"> Edit</a>
                        <a class="btn btn-danger" href="#"> Delete</a>
                        
                        
                        </td>

                        </tr>
                        
                    </tbody>
                    </table>

                </div>   

    </div>    
    
    
    </div>
     


@endsection