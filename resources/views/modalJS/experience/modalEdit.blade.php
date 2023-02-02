

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" 
        aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">      
                        <input type="text" class="form-control" id="inputId" 
                            name="id" placeholder=" id" value="" readonly>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" 
                        name="Institution" id="InstitutionID" placeholder="Institution Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  
                        name="experience_name" id="experience_nameID" placeholder="Experience Name" required>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        </div>
                        <input name="experience_duration" id="experience_durationID" type="text" class="form-control float-right" >
                    </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" 
                        name="experience_technology" id="experience_technologyID" placeholder="technology" required>
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" id="experience_descriptionID" 
                        name="experience_description" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control"  
                    name="experience_link" id="experience_linkID" placeholder="Link" required>
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
                        <input type="file" class="form-control" name="experience_video" id="experience_video" >
                    </div>
                    
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Exit</button>
                            <button type="submit" name="submit" class="btn btn-primary" id="update">Save</button>
                        </div>

                </form>
               

            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    //   let modalEdit = $.fn.modal.noConflict();

    $('body').on('click','#btnEdit',function(){
        // modalEdit.call($(this),e);
        let UserID =$(this).data('id');
        console.log(UserID);
        //fetch data user
        $.ajax({
            url:`experience/${UserID}`,
            type:"GET",
            cache:false,
            processData: false,
            success:function(response){
                $('#inputId').val(response.data.id);
                $('#InstitutionID').val(response.data.Institution);
                $('#experience_nameID').val(response.data.experience_name);
                $('#experience_durationID').val(response.data.experience_duration);
                $('#experience_technologyID').val(response.data.experience_technology);
                $('#experience_descriptionID').val(response.data.experience_description);
                $('#experience_linkID').val(response.data.experience_description);

                $('#modalEdit').modal('show');
                
            }
        });
        
                
    });


    //update data
    $(document).ready(function () {
        $('#updateForm').on('submit',function(e){
        e.preventDefault();
        

        //define variable
        let id= $('#inputId').val();
        let name= $('#nameID').val();
        let email= $('#emailID').val();
        let phone_number= $('#phoneNumberID').val();
        let user_description = $('#userDescriptionID').val();
        let address= $('#addressID').val();
        // let path_image= $("#image")[0].files[0];

       
        let formData = new FormData($('#updateForm')[0]);

        $.ajax({

            url:'experience/' + id,
            type:'POST',
            cache: false,
            processData: false,
            contentType: false,
            data: formData,
            success:function(response){

                Swal.fire({
                    type:'success',
                    icon:'success',
                    title:`${response.message}`,
                    showConfirmButton:false,
                    timer:3000
                });

                //data post
                let postTbEdit =`
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
                $(`#index_${response.data.id}`).replaceWith(postTbEdit);

                //close modal
                $('#modalEdit').modal('hide');
            }
        }).fail(function(error) {
            console.log('error', error);
        });
  
    });
    });

   
   
</script>


