
@extends('layouts.admin.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Organizations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Organizations</li>
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
                
                    <div data-target="#addEducation" data-ta class="btn btn-sm btn-primary mb-3 " data-toggle="modal"  >
                        <div >
                          <i class="fas fa-plus fa-sm"></i>
                          Add Organizations
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
                    <th>Organization Name</th>
                    <th> Institution</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Duration</th> 
                    <th>Updated At</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
             
                      <td> {{ $item->organization_name }}</td>
                      <td>{{ $item->institution }}</td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->image }}</td>
                      <td>{{ $item->duration }}</td>
                      <td>{{ $item->updated_at }}</td>
               
                
                      </tr>
                    @endforeach
          
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Organization Name</th>
                    <th> Institution</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Duration</th> 
                    <th>Updated At</th>

                  </tr>
                  </tfoot>
                </table>
              </div>

                <div class="modal fade" id="addEducation" tabindex="-1" role="dialog" 
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Organization</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('organizations') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                    <input type="text" class="form-control" id="nama_barang" 
                                    name="organization_name" placeholder="Organization Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="keterangan" 
                                    name="institution" placeholder="Institution Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="harga" 
                                    name="duration" placeholder="Duration" required>
                                </div>
                              
                                <div class="form-group">
                                  <textarea type="text" class="form-control" id="stok" 
                                  name="description" placeholder="Description" required></textarea>
                              </div>
                                <div class="form-group">
                                    <label>Image </label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="gambar" 
                                    name="image" >
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection



  