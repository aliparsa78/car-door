<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
    <base href="{{asset('public')}}">
</head>
<body>
    
    @extends('Backend/layouts/main')
          <!-- partial -->
            <!-- partial:partials/_navbar.html -->
           @section('content')
           <div class="col-10 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form class="form-sample" action="{{route('car_category.store')}}" method="POST">
                        @csrf
                        @method('Post')
                      <p class="card-description text-b"> Add New Category </p>
                    
                      <div class="">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <input type="text" name="name" class="form-control mb-2 mr-sm-2"  placeholder="Enter the category name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Available</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="available" id="membershipRadios1" value="yes" checked=""> Yes <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="available" id="membershipRadios2" value="noe"> No <i class="input-helper"></i></label>
                              </div>
                            </div>
                          </div>

                          <input type="submit" class="btn btn-info" value="Save Category">
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
    @endsection
</body>
</html>