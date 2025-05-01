<base href="{{asset('public')}}">
<style>
    .table thead tr th, td {
        color: white
    }
    
</style>
    @extends('Backend/layouts/main')
          <!-- partial -->
            <!-- partial:partials/_navbar.html -->
           @section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Car Tables  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            
             
              
              <div class="col-lg-11 grid-margin stretch-card pr-4 ">
                <div class="card ">
                  <div class="card-body ">
                    <h4 class="card-title">Bordered table</h4>
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
        