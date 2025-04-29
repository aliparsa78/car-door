<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Categoryies</title>
    <base href="{{asset('public')}}">
</head>
<body>
    
    @extends('Backend/layouts/main')
          <!-- partial -->
            <!-- partial:partials/_navbar.html -->
           @section('content')
           <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Cateogories Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Category tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table text-white">
                        <thead>
                          <tr class="text-white">
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Available Status</th>
                            <th>Created At</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                          <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->available}}</td>
                            <td>{{$category->created_at}}</td>
                            <td><a href="{{route('car_category.edit',$category->id)}}" class="btn btn-info">Edit</a></td>
                            <td>
                              <form action="{{route('car_category.destroy',$category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
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
             
            </div>
          </div>
        
        </div>
    @endsection
</body>
</html>