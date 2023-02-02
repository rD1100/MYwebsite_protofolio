
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}


<div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" 
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
            <form id="createForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" 
                    name="name" placeholder=" Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" 
                    name="email" placeholder="Email " required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="phone_number" 
                    name="phone_number" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    
                    <textarea  class="form-control" id="IDDesc" 
                    name="user_description" placeholder="user_description" required></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="address" 
                    name="address" placeholder="Address" required>
                </div>

                <div class="form-group">
                    <label>Image </label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror"  
                    name="path_image" id="path_image" >
                    @error('image')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button  type="button" class="btn btn-dark" data-dismiss="modal">Exit</button>
                    <button id="store" type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            
            </form>
               
        </div>
      
    </div>
    </div>
</div>



<script type="text/javascript">
    // let modalCreate = $.fn.modal.noConflict();
  

    //proses simpan
    $('body').on('click','#addUser',function() {
        // modalCreate.call($(this), e);
      //open modal
        $('#modalAddUser').modal('show');
    });

    $(document).ready(function () {
        $('#createForm').on('submit',function(e) {
        e.preventDefault();

        //define variable
        let nameCreate=$('#IDName').val();
        let emailCreate=$('#IDEmail').val();
        let phoneNumberCreate=$('#IDPhoneNumber').val();
        let descCreate=$('#IDDesc').val();
        let addressCreate=$('#IDAddress').val();
        let formData = new FormData($('#createForm')[0]);

        $.ajax({
            url:'user',
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
                $('#tablePosts').prepend(postTbCreate);

                //clear form
                $('#name').val('');
                $('#email').val('');
                $('#phone_number').val('');
                $('#user_description').val('');
                $('#address').val('');
                $('#path_image').val('');

                //close modal
                $('#modalAddUser').modal('hide');

            },
            
        }).fail(function(error) {
            console.log('error', error);
        });

    });
    });

</script>