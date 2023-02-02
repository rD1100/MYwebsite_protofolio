
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

