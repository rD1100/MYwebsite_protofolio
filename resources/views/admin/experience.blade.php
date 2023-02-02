
@extends('layouts.admin.main')
@section('content')

<link rel="stylesheet" href="/css/admin/daterangepicker.css">
<script src="/js/admin/jquery/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Experiences</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Experiences</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <div class="card">
        
              <div class="card-header " >
                @if (Session::has('success'))              
                        <div class="alert alert-success  " role="alert">
                            {{ Session::get('success') }}
                            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                        </div>

                    @endif
                <div style="float: right">
               
                    <a href="javascript:void(0)" id="addExperience" data-ta class="btn btn-sm btn-primary mb-3 " >
                      
                          <i class="fas fa-plus fa-sm"></i>
                          Add Experience
                        
                    </a>
                  
                </div>
             
                {{-- <h3 class="card-title">DataTable with minimal features & hover style</h3> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table  class="table table-bordered table-hover" style="">
                  <thead>
                  <tr>
                    <th>Institution Name</th>
                    <th>Experience Name</th>
                    <th>Duration</th>
                    <th>Technology</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Status</th>
             
                  </tr>
                  </thead>
                  <tbody id="tablePosts">
                    @foreach ($data as $item)
                    <tr id="index_{{$item->id }}">
                      <td>{{ $item->Institution}}</td>
                      <td>{{ $item->experience_name	 }}</td>
                      <td>{{ $item->experience_duration }} </td>
                      <td>{{ $item->experience_technology }}</td>
                      <td> {{ $item->experience_description }}</td>
                      <td>{{ $item->experience_link }}</td>
                      <td style="">
                        <img  style="width: 40px;height: 30px;" class="imgUser" src="{{ $item->experience_image}}" alt="" >
                      </td>
                      <td> 
                        <video class="" src="{{ $item->experience_video}}" controls 
                        style="width: 40px;height: 30px;">
                        </video>
                      </td>
                      <td style="text-align: center">
                          <div style="margin-left: -10%;">
                            <button  id="btnEdit" data-id="{{ $item->id }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                      
                        
                            <form id="idDelete" method="post" style="display: inline;">
                              @csrf
                              @method('delete')
                              <button name="submit" id="btnDeleteID"  data-id="{{ $item->id }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                          </div>
                        
                      </td>
               
      
                    </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Institution Name</th>
                    <th>Experience Name</th>
                    <th>Duration</th>
                    <th>Technology</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Status</th>
           
                  </tr>
                  </tfoot>
                </table>
              </div>

            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <script>
      //Date range picker
      $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY hh:mm A'
          }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
          {
            ranges   : {
              'Today'       : [moment(), moment()],
              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month'  : [moment().startOf('month'), moment().endOf('month')],
              'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          }
        )
    
    
    
        
    </script>
    
    <!-- /.content -->
  </div>

  <script src="/js/admin/daterangepicker.js"></script>
  <!-- /.content-wrapper -->

  @include('modalJS.experience.modalCreate') 
  @include('modalJS.experience.modalEdit')
  {{-- @include('modalJS.experience.deletePost')  --}}
@endsection



  