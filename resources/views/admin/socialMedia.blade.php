
@extends('layouts.admin.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Social Media</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Social Medias</li>
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
              <div class="card-header">
             
                @if (Session::has('success'))              
                <div class="alert alert-success  " role="alert">
                    {{ Session::get('success') }}
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>

                @endif
                <div style="float: right">
               
                  <div data-target="#addSocialMedia" data-ta class="btn btn-sm btn-primary mb-3 " data-toggle="modal"  >
                      <div >
                        <i class="fas fa-plus fa-sm"></i>
                        Add Social Media
                      </div>
                  </div>
                
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th> Name</th>
                    <th>Account Link</th>
                    <th>Image</th>
                    <th>Updated At</th>
             
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                      <tr>
             
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $item->social_media_name }} </td>
                        <td>{{ $item->social_media_account_link }}</td>
                        <td>{{ $item->social_media_image }} </td>
                        <td>{{ $item->updated_at }}</td>
             
                      </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Account Link</th>
                    <th>Image</th>
                    <th>Updated At</th>
     
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="modal fade" id="addSocialMedia" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Add Social Media</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <form action="{{ url('socialmedia') }}" method="post" >
                          @csrf
                          <div class="form-group">
                                 <input type="text" class="form-control" id="nama_barang" 
                                 name="social_media_name" placeholder="Social Media Name" required>
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" id="keterangan" 
                                 name="social_media_account_link" placeholder="Link Account" required>
                             </div>

                             <div class="form-group">
                                 <input type="text" class="form-control" id="harga" 
                                 name="social_media_image" placeholder="Icon" required>
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
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection



  