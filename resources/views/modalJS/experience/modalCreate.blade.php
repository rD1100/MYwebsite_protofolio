
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}


  <div class="modal fade" id="ModalExperience" tabindex="-1" role="dialog" 
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
                    <form id="createForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" 
                            name="Institution" id="Institution" placeholder="Institution Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  
                            name="experience_name" id="experience_name" placeholder="Experience Name" required>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                            </div>
                            <input name="experience_duration" id="experience_duration" type="text" class="form-control float-right" >
                        </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" 
                            name="experience_technology" id="experience_technology" placeholder="technology" required>
                        </div>
                        <div class="form-group">
                            <textarea  class="form-control" id="experience_description" 
                            name="experience_description" placeholder="Description" required></textarea>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control"  
                        name="experience_link" id="experience_link" placeholder="Link" required>
                    </div>
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="experience_image" 
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
                        name="experience_video" id="experience_video" >
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

<script type="text/javascript">
    $('body').on('click','#addExperience',function() {
        // modalCreate.call($(this), e);
      //open modal
        $('#ModalExperience').modal('show');
    });

    $(document).ready(function () {
        $('#createForm').on('submit',function(e) {
        e.preventDefault();

        //define variable
        
        let formData = new FormData($('#createForm')[0]);

        $.ajax({
            url:'experience',
            type:"POST",
            cache:false,
            processData:false,
            contentType:false,
            data:formData,
            success:function(response){
                Swal.fire({
                    type:'success',
                    icon:'success',
                    title:`${response.message}`,
                    showConfirmButton:false,
                    timer:3000
                });

                let postTbCreate=`
                <tr id="index_${response.data.id}">
                    <td>${response.data.Institution}</td>
                    <td>${response.data.experience_name}</td>
                    <td>${response.data.experience_duration}</td>
                    <td>${response.data.experience_technology}</td>
                    <td>${response.data.experience_description}</td>
                    <td>${response.data.experience_link}</td>
                    <td style="">
                    <img  style="width: 40px;height: 30px;" class="imgUser" src="${response.data.experience_image}" alt="" >
                    </td>
                    <td> 
                        <video class="" src="${response.data.experience_video}" controls 
                        style="width: 40px;height: 30px;">
                        </video>
                    </td>
                    <td style="text-align: center">
                        <div style="margin-left: -5%;">
                        <button  id="btnEdit" data-id="${response.data.id}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>

                        <form id="idDelete" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button name="submit" id="btnDeleteID"  data-id="${response.data.id}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                    </td>
           
                </tr>
                    `;

                //append to post data
                $('#tablePosts').prepend(postTbCreate);

                //clear form
                $('#Institution').val('');
                $('#experience_name').val('');
                $('#experience_duration').val('');
                $('#experience_technology').val('');
                $('#experience_description').val('');
                $('#experience_link').val('');
                $('#experience_image').val('');
                $('#experience_video').val('');
               

                //close modal
                $('#ModalExperience').modal('hide');
            },
            
        }).fail(function(error) {
            console.log('error', error);
        });

    });
    });

</script>