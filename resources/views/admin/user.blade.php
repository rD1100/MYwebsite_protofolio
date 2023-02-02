
@extends('layouts.admin.main')
@section('content')

  {{-- content --}}
<script src="/js/admin/jquery/jquery.min.js"></script>

<style>

  .imgUser{
  width: 40px;
  height: 30px;
  /* display: block; */
  /* visiblity: visible; */
  transition: transform .3s;
}

.imgUser:hover{
  /* display: block; */
  /* visibility: hidden; */
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
  width: 150px;
  height: 120px;

}
</style>
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
                  
                        <a href="javascript:void(0)" id="addUser" data-ta class="btn btn-sm btn-primary mb-3 "  >
                            
                              <i class="fas fa-plus fa-sm"></i>
                              Add User
                          
                          </a>
                      
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table id="" class="table  table-bordered table-striped " >
                  <thead>
                    <tr>
                      <th scope="col">Name </th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Description</th>
                      <th scope="col">Address</th>
                      <th scope="col">Image</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody id="tablePosts">
                  
                      @foreach ($data as $item)
                        <tr id="index_{{ $item->id }}">
                          <td>{{ $item->name}} </td>
                          <td>{{ $item->email}}</td>
                          <td>{{ $item->phone_number}} </td>
                          <td>{{ $item->user_description}}</td>
                          <td>{{ $item->address}}</td>
                          <td style="position: absolute;"><img class="imgUser" src="{{ $item->path_image}}" alt="" ></td>
                          <td style="text-align: center">
                            <button  id="btnEdit" data-id="{{ $item->id }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                            <form id="idDelete" method="post" style="display: inline;">
                              @csrf
                              @method('delete')
                              <button name="submit" id="btnDeleteID"  data-id="{{ $item->id }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                  
                  </tbody>
                  <tfoot>
                    <tr>
                      <th scope="col">Name </th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Description</th>
                      <th scope="col">Address</th>
                      <th scope="col">Image</th>
                      <th scope="col">Status</th>
                    </tr>
                  </tfoot>
                </table>

                
              </div>
              <!-- /.card-body -->
           

         
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

  </div>

@include('modalJS.user.modalCreate') 
@include('modalJS.user.modalEdit')
@include('modalJS.user.deletePost')

{{-- js --}}
{{-- @include('JS_CRUD.user.create')  --}}

@endsection

 