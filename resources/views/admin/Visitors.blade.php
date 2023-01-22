
@extends('layouts.admin.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Visitors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Visitors</li>
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
             
                {{-- <h3 class="card-title">DataTable with minimal features & hover style</h3> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Visitor Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Messages</th>
                    <th>Added At</th>
              
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
               
                  <td></td>
                  <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
                  <td></td>
                  <td></td>
   
     
                    <?php
                    
                      ?>
                     
                    <?php
                 
                    ?>
                  </tr>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Visitor Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Messages</th>
                    <th>Added At</th>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection



  