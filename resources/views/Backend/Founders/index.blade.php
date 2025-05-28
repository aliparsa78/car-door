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
              <h3 class="page-title"> Founders Tables  </h3>
              
            </div>
            <div class="row">
            
             
              
              <div class="col-lg-11 grid-margin stretch-card pr-4 ">
                <div class="card ">
                    <div class="card-header">
                  <a href="{{route('founder.create')}}" class="text-right  btn btn-info" style=" float:right; margin-right: 4rem;"> <i class="mdi mdi-car"></i> Add new Founder</a>

                  <h4 class="card-title">Founders table</h4>
                    </div>
                  <div class="card-body ">
                    </p>
                    <div class="table-responsive ">
                      <table class="table table-bordered ">
                        <thead >
                          <tr >
                            <th> # </th>
                            <th> Founder Name  </th>
                            <th> Last Name </th>
                            <th> Photo </th>
                            <th> Career </th>
                            <th> Discriptions </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php  $id=1;   @endphp
                         @foreach($founders as $founder)
                          <tr>
                            <td> {{$id++}} </td>
                            <td> {{$founder->name}} </td>
                            <td> {{$founder->lastname}} </td>
                            <td> <img src="{{asset('storage/Founders/'.$founder->photo)}}" style="width: 100px; height: 100px" alt=""> </td>
                            <td> {{$founder->career}} </td>
                            <td style="max-width: 200px; white-space: normal;"> {{$founder->description}} </td>
                            
                            <td> <a href="{{route('founder.edit',$founder->id)}}" class="btn btn-info">Edit</a> </td>
                            <td>
                                <form action="{{route('founder.destroy',$founder->id)}}" method="post">
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
        