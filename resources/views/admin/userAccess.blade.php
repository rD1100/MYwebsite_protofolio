
@extends('layouts.admin.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Access</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">User Access</li>
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
                  
                        <div data-target="#addUserAccess" data-ta class="btn btn-sm btn-primary mb-3 " data-toggle="modal"  >
                            <div style="">
                              <i class="fas fa-plus fa-sm"></i>
                              Add User Access
                            </div>
                        </div>
                      
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                 
                      <th>User Name </th>
                      <th>Social Media Name</th>
                      <th>Experience Name </th>
                      <th>Education Name</th>
                      <th>Skill Name</th>
                      <th>Organization Name</th>
                      <th>Updated At</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $items)
                    <tr>
                     
                        <td>{{ $items->user_tb->name}}</td>
                        <td>{{ $items->social_media_tb->social_media_name}}</td>
                        <td>{{ $items->experience_tb->experience_name}}</td>
                        <td>{{ $items->education_tb->education_name}}</td>
                        <td>{{ $items->skill_tb->skill_name }}</td>
                        <td>{{ $items->organization_tb->organization_name}}</td>
                        <td>{{ $items->updated_at }}</td>
                        
                    </tr>
                  @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
           
                      <th>User Name </th>
                      <th>Social Media Name</th>
                      <th>Experience Name </th>
                      <th>Education Name</th>
                      <th>Skill Name</th>
                      <th>Organization Name</th>
                      <th>Updated At</th>
  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="modal fade" id="addUserAccess" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Add User Access</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <form action="{{ url('useraccess') }}" method="post">
                            @csrf
                                <div class="form-group">
                           
                                   <input type="text" list="idListUserId" class="form-control" 
                                   name="user_id" placeholder=" User Name" required  >
                                       <datalist id="idListUserId">
                                           @foreach ($userData as $items)
                                               <option value="{{ $items->id}}">{{ $items->name}}</option>
                                           @endforeach
                                       </datalist>
                                   </input>
                                </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" list="SocialId" 
                                    name="social_media_id" placeholder="Social Media Name " required>
                                    <datalist id="SocialId">
                                      @foreach ($socialMediaData as $items)
                                          <option value="{{ $items->id}}">{{ $items->social_media_name }}</option>
                                      @endforeach
                                  </datalist>
                                  </input>
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control" list="ExperienceId" id="harga" 
                                   name="experience_id" placeholder="Experience Name" required>
                                   <datalist id="ExperienceId">
                                    @foreach ($experienceData as $items)
                                        <option value="{{ $items->id}}">{{ $items->experience_name }}</option>
                                    @endforeach
                                </datalist>
                                </input>
                               </div>
                               <div class="form-group">
                                   <input type="text"  class="form-control" id="stok" list="EducationId"
                                   name="education_id" placeholder="Education Name " required>
                                   <datalist id="EducationId">
                                      @foreach ($eduData as $items)
                                          <option value="{{ $items->id}}">{{ $items->education_name }}</option>
                                      @endforeach
                                    </datalist>
                                  </input>
                               </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" id="stok" 
                                    name="skill_ids" placeholder="Skill Name"list="SkillId" required>
                                      <datalist id="SkillId">
                                        @foreach ($skillData as $items)
                                            <option value="{{ $items->id}}">{{ $items->skill_name }}</option>
                                        @endforeach
                                      </datalist>
                                  </input>
                              </div>

                              <div class="form-group">
                                <input type="text" class="form-control" id="stok" 
                                  name="organization_id" placeholder="Organization Name"list="OrganizationId" required>
                                    <datalist id="OrganizationId">
                                      @foreach ($organizationData as $items)
                                          <option value="{{ $items->id}}">{{$items->organization_name}}</option>
                                      @endforeach
                                    </datalist>
                                </input>
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



  