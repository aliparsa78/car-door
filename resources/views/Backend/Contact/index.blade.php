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
              <h3 class="page-title"> Contact Table  </h3>
              
            </div>
            <div class="row">
            
             
              
              <div class="col-lg-11 grid-margin stretch-card pr-4 ">
                <div class="card ">
                    <div class="card-header">

                  <h4 class="card-title">Contact table</h4>
                    </div>
                  <div class="card-body ">
                    </p>
                    <div class="table-responsive ">
                      <table class="table table-bordered ">
                        <thead >
                          <tr >
                            <th> # </th>
                            <th> User Name  </th>
                            <th> User Email </th>
                            <th> Subject </th>
                            <th> Message </th>                           
                          </tr>
                        </thead>
                        <tbody>
                            @php  $id=1;   @endphp
                        @foreach($contacts as $contact)
                            <tr>
                            <td>{{$id++}}</td>
                            <td>{{$contact->fullname}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
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
        