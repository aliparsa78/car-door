    <base href="{{asset('public')}}">
    @extends('Backend/layouts/main')
          <!-- partial -->
            <!-- partial:partials/_navbar.html -->
           @section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Car form </h4>
                    
                    <form class="forms-sample" action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Car Category</label>
                        <select class="form-control" name="category_id" id="sel1">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Car Name</label>
                        <input type="text" class="form-control" name="car_name" id="exampleInputEmail3" placeholder="Car Name" required>
                        @error('car_name')  <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Car Model</label>
                        <input type="text" class="form-control" name="car_model" id="exampleInputPassword4" placeholder="Car Model" required>
                        @error('car_model') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                      <div class="form-group">
                        <label >Car Color</label>
                        <input type="text" class="form-control" name="car_color" id="" placeholder="Car Color" required>
                        @error('car_color') <span class="text-danger">{{$message}}</span> @enderror

                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Car Plate Number</label>
                        <input type="text" class="form-control" name="plate_number" id="exampleInputPassword4" placeholder="Plate Number" required>
                        @error('plate_number') <span class="text-danger">{{$message}}</span> @enderror
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Price Per Day</label>
                        <input type="number" class="form-control" name="price_perday" id="exampleInputPassword4" placeholder="Price" required>
                        @error('price_perday') <span class="text-danger">{{$message}}</span> @enderror
                        
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image"  placeholder="Upload Image" required>
                          
                        </div>
                        @error('image') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Car details</label>
                        <textarea class="form-control" name="details" id="exampleTextarea1" rows="4" required ></textarea>
                        @error('details') <span class="text-danger">{{$message}}</span> @enderror

                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" name="city" id="exampleInputCity1" placeholder="Location" required>
                        @error('city') <span class="text-danger">{{$message}}</span> @enderror

                      </div>
                      
                      <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
    @endsection
        