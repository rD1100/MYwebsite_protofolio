
@extends('layouts.admin.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                  
                        <div data-target="#addUser" data-ta class="btn btn-sm btn-primary mb-3 " data-toggle="modal"  >
                            <div style="">
                              <i class="fas fa-plus fa-sm"></i>
                              Add User
                            </div>
                        </div>
                      
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered ">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Image</th>
          
                    <th>Status</th>
             

                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $item)
                    <tr>
          
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $item->name}} </td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone_number}} </td>
                        <td>{{ $item->user_description}}</td>
                        <td>{{ $item->address}}</td>
                        <td>{{ $item->user_image}}</td>
                 
            
                        <td><div data-targ>Edit</div></td>
                        <td><a href="">Delete</a></td>
                    </tr>

                  @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>No</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Status</th>
       
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="modal fade" id="addUser" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <form action="{{ url('user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                   <input type="text" class="form-control" id="nama_barang" 
                                   name="name" placeholder=" Name" required>
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control" id="keterangan" 
                                   name="email" placeholder="Email " required>
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control" id="harga" 
                                   name="phone_number" placeholder="Phone" required>
                               </div>
                               <div class="form-group">
                                   
                                   <textarea  class="form-control" id="stok" 
                                   name="user_description" placeholder="Description" required></textarea>
                               </div>
                               <div class="form-group">
                                <input type="text" class="form-control" id="stok" 
                                name="address" placeholder="Address" required>
                            </div>
                               <div class="form-group">
                                   <label>Image </label>
                                   <input type="file" class="form-control @error('image') is-invalid @enderror" id="gambar" 
                                   name="user_image" >
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



  