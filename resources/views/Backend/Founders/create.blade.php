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
                    <h4 class="card-title">Founder form </h4>
                    
                    <form class="forms-sample" action="{{route('founder.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                      <div class="form-group">
                        <label for="exampleInputEmail3">Founder Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail3" placeholder="Car Name" required>
                        @error('name')  <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="exampleInputPassword4" placeholder="Car Model" required>
                        @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
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
                        <label for="exampleTextarea1">Descriptions </label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" required ></textarea>
                        @error('description') <span class="text-danger">{{$message}}</span> @enderror

                      </div>
                      
                      <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
    @endsection
        