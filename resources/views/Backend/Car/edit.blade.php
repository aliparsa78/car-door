<base href="{{asset('public')}}">
    @extends('Backend/layouts/main')
          <!-- partial -->
            <!-- partial:partials/_navbar.html -->
           @section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Car form </h4>
                    <form class="forms-sample" action="{{route('cars.update',$car->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Car Category</label>
                        <select class="form-control" name="category_id" id="sel1">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" <?php if($category->id === $car->category->id){ ?> selected <?php }  ?>  >{{$category->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Car Name</label>
                        <input type="text" class="form-control" name="car_name" value="{{$car->car_name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Car Model</label>
                        <input type="text" class="form-control" name="car_model" value="{{$car->car_model}}">
                      </div>
                      <div class="form-group">
                        <label >Car Color</label>
                        <input type="text" class="form-control" name="car_color" value="{{$car->car_color}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Car Plate Number</label>
                        <input type="text" class="form-control" name="plate_number" value="{{$car->plate_number}}">
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Price Per Day</label>
                        <input type="number" class="form-control" name="price_perday" value="{{$car->price_perday}}">
                        
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image"  placeholder="Upload Image">
                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Car details</label>
                        <textarea class="form-control" name="details"  rows="4"> {{$car->details}} </textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" name="city" value="{{$car->city}}">
                      </div>
                      
                      <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
    @endsection
        