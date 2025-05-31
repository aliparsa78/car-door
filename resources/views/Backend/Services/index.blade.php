<base href="{{asset('public')}}">
<style>
    .table{
        margin-right: 40px;
    }
    .table thead tr th, td {
        color: white
    }
    
</style>
    @extends('Backend/layouts/main')
          <!-- partial -->
            <!-- partial:partials/_navbar.html -->
           @section('content')
        <!-- partial -->
        <div class="main-panel mr-5">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Services Tables  </h3>
              
            </div>
            <div class="row">
            
             
              
              <div class="col-lg-11 grid-margin stretch-card pr-4 ">
                <div class="card ">
                    <div class="card-header">
                  <a href="{{route('service.create')}}" class="text-right  btn btn-info" style=" float:right; margin-right: 4rem;"> <i class="mdi mdi-plus"></i> Add new Service</a>

                  <h4 class="card-title">Services table</h4>
                    </div>
                  <div class="card-body ">
                    </p>
                    <div class="table-responsive ">
                      <table class="table table-bordered ">
                        <thead >
                          <tr >
                            <th> # </th>
                            <th> Service   </th>
                            <th> Icon </th>
                            <th> Discriptions </th>
                            <th> status </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php  $id=1;   @endphp
                         @foreach($services as $service)
                          <tr>
                            <td> {{$id++}} </td>
                            <td> {{$service->service}} </td>
                            <td> <img src="{{asset('storage/Service/'.$service->icon)}}" style="width: 100px; height: 100px" alt=""> </td>
                            <td style=" width: 300px; white-space: normal;">{{$service->description}}</td>                            
                            <td class="{{$service->status=='active'?'text-success' : 'text-danger'}}">{{$service->status}}</td>                            
                            <td> <a href="{{route('service.edit',$service->id)}}" class="btn btn-info">Edit</a> </td>
                            <td>
                                <form action="{{route('service.destroy',$service->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >Delete</button>
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
        @endsection
        