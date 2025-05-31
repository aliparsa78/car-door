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
                    <h4 class="card-title">Service form </h4>
                    
                    <form class="forms-sample" action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                      
                      <div class="form-group">
                        <label for="exampleInputEmail3">Service Name</label>
                        <input type="text" class="form-control" name="service" id="exampleInputEmail3" value="{{$service->service}}" required>
                        @error('name')  <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                     
                  
                      <div class="form-group">
                        <label for="exampleTextarea1">Descriptions </label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" required >{{$service->description}}</textarea>
                        @error('description') <span class="text-danger">{{$message}}</span> @enderror

                      </div>
                      
                      <div class="form-group">
                        <label>Service Icon </label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image"  placeholder="Upload Image">
                          
                        </div>
                        @error('image') <span class="text-danger">{{$message}}</span> @enderror
                      </div>

                      <div class="form-group">
                        <label>Service Status </label>
                        <div class="input-group col-xs-12">
                          <select class="form-control file-upload-info" name="status" id="">
                            <option value="active" {{$service->status=='active' ? 'selected' :''}}>Active</option>
                            <option value="inactive" {{$service->status=='inactive' ? 'selected' :''}}>Inactive</option>
                          </select>
                          
                        </div>
                        @error('image') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                     
                      
                      <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
    @endsection
        