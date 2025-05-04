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
              <h3 class="page-title"> Car Tables  </h3>
              
            </div>
            <div class="row">
            
             
              
              <div class="col-lg-11 grid-margin stretch-card pr-4 ">
                <div class="card ">
                    <div class="card-header">
                  <a href="{{route('cars.create')}}" class="text-right  btn btn-info" style=" float:right; margin-right: 4rem;"> <i class="mdi mdi-car"></i> Add new Car</a>

                  <h4 class="card-title">Cars table</h4>
                    </div>
                  <div class="card-body ">
                    </p>
                    <div class="table-responsive ">
                      <table class="table table-bordered ">
                        <thead >
                          <tr >
                            <th> # </th>
                            <th> Category Name  </th>
                            <th> Car Name </th>
                            <th> Car Model </th>
                            <th> Car Color </th>
                            <th> Plate Number </th>
                            <th> Image </th>
                            <th> Details</th>
                            <th> Price Per Day</th>
                            <th> City </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php  $id=1;   @endphp
                    @foreach($cars as $car)
                          <tr>
                            <td> {{$id++}} </td>
                            <td> {{$car->category->name}} </td>
                            <td> {{$car->car_name}} </td>
                            <td> {{$car->car_model}} </td>
                            <td> {{$car->car_color}} </td>
                            <td> {{$car->plate_number}} </td>
                            <td> <img src="{{asset('storage/CarsImage/'.$car->photo)}}" style="width: 60px; height: 60px" alt=""> </td>
                            <td style="max-width: 200px; overflow:hidden; text-overflow: ellipsis; white-space: nowrap;"> {{$car->details}} </td>
                            <td> {{$car->price_perday}} </td>
                            <td> {{$car->city}} </td>
                            <td> <a href="{{route('cars.edit',$car->id)}}" class="btn btn-info">Edit</a> </td>
                            <td>
                                <form action="{{route('cars.destroy',$car->id)}}" method="post">
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
        