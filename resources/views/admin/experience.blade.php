
@extends('layouts.admin.main')
@section('content')
<link rel="stylesheet" href="/css/admin/daterangepicker.css">
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
               
                    <div data-target="#addExperience" data-ta class="btn btn-sm btn-primary mb-3 " data-toggle="modal"  >
                        <div style="">
                          <i class="fas fa-plus fa-sm"></i>
                          Add Experience
                        </div>
                    </div>
                  
                </div>
             
                {{-- <h3 class="card-title">DataTable with minimal features & hover style</h3> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" style="">
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
                    <th>Updated</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->Institution}}</td>
                  <td>{{ $item->experience_name	 }}</td>
                  <td>{{ $item->experience_duration }} </td>
                  <td>{{ $item->experience_technology }}</td>
                  <td> {{ $item->experience_description }}</td>
                  <td>{{ $item->experience_link }}</td>
                  <td>{{ $item->experience_image }}</td>
                  <td>{{ $item->experience_video }}</td>
                  <td>{{ $item->updated_at }}</td>
      
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
                    <th>Updated</th>
         
           
                  </tr>
                  </tfoot>
                </table>
              </div>

              <div class="modal fade" id="addExperience" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <form action="{{ url('experience') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                <input type="text" class="form-control" 
                                name="Institution" placeholder="Institution Name" required>
                              </div>
                              <div class="form-group">
                                     <input type="text" class="form-control"  
                                     name="experience_name" placeholder="Experience Name" required>
                                 </div>
                                 <div class="form-group">
                                     {{-- <input type="text" class="form-control" id="keterangan" 
                                     name="experience_duration" placeholder="Duration" required> --}}

                                     <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="far fa-calendar-alt"></i>
                                        </span>
                                      </div>
                                      <input name="experience_duration" type="text" class="form-control float-right" id="reservation">
                                    </div>
                                 </div>
     
                                 <!-- <div class="form-group">
                                     <select class="form-control" name="kriteria" id="kriteria" required>
                                     <option selected>Sebagai</option>
                                                 <option>Reseller</option>
                                                 <option >Pelatih</option>
                                                 <option >Agen</option>
                                           </select>
     
                                 </div> -->
     
                                 {{-- <div class="form-group">
                                     <select class="form-control" name="kategori" id="kategori" required>
                                         <option>Taekwondo</option>
                                         <option>Karate</option>
                                         <option>Judo</option>
                                         <option>Boxing</option>
                                     </select>
                                 </div> --}}
                                 
                                 <div class="form-group">
                                     <input type="text" class="form-control" 
                                     name="experience_technology" placeholder="technology" required>
                                 </div>
                                 <div class="form-group">
                                     <textarea  class="form-control" id="stok" 
                                     name="experience_description" placeholder="Description" required></textarea>
                                 </div>
                                 <div class="form-group">
                                  <input type="text" class="form-control"  
                                  name="experience_link" placeholder="Link" required>
                              </div>
                                 <div class="form-group">
                                     <label>Image </label>
                                     <input type="file" class="form-control @error('image') is-invalid @enderror" id="gambar" 
                                     name="experience_image" >
                                     @error('image')
                                         <div class="invalid-feedback">
                                            {{ $message }}
                                         </div>
                                     @enderror
                                 </div>
                                 <div class="form-group">
                                  <label>Video</label>
                                  <input type="file" class="form-control" 
                                  name="experience_video" >
                              </div>
     
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-dark" data-dismiss="modal">Exit</button>
                                     <button type="submit" class="btn btn-primary">Save</button>
                                 </div>
                         </div>
                         </form>
                     </div>
                 </div>
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
@endsection



  