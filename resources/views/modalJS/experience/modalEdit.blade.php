

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
                                <input type="text" class="form-control" id="nameID" 
                                name="name" placeholder=" Name" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="emailID" 
                            name="email" placeholder="Email " required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phoneNumberID" 
                            name="phone_number" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            
                            <textarea  class="form-control" id="userDescriptionID" 
                            name="user_description" placeholder="Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="addressID" 
                            name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="path_image" 
                            name="path_image" >
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
            url:`user/${UserID}`,
            type:"GET",
            cache:false,
            processData: false,
            success:function(response){
                $('#inputId').val(response.data.id);
                $('#nameID').val(response.data.name);
                $('#emailID').val(response.data.email);
                $('#phoneNumberID').val(response.data.phone_number);
                $('#userDescriptionID').val(response.data.user_description);
                $('#addressID').val(response.data.address);
              
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

            url:'user/' + id,
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
                    <td>${response.data.name}</td>
                    <td>${response.data.email}</td>
                    <td>${response.data.phone_number}</td>
                    <td>${response.data.user_description}</td>
                    <td>${response.data.address}</td>
                    <td style="position: absolute;"><img class="imgUser" src="${response.data.path_image}" alt="" ></td>
                    <td style="text-align: center">
                        <button  id="btnEdit" data-id="${response.data.id}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                        <form id="idDelete" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button name="submit" id="btnDeleteID"  data-id="${response.data.id}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
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


