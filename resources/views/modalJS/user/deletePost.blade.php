<script type="text/javascript">

 
    $('body').on('click','#btnDeleteID',function (e) {
      e.preventDefault();
      let id = $(this).data('id');
      let formData = new FormData($('#idDelete')[0]);
      console.log(id);

     
//
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type:'post',
            url:'user/' + id,
            data:formData,
            processData: false,
            contentType: false,
            // headers: {
            //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            success: function (data) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              );
              // refresh the table view with the returned data
              // $("table").load("table");
              location.reload();
            },
            error: function (data) {
              Swal.fire(
                'Error!',
                'Something went wrong.',
                'error'
              );
              console.log("error:",error);
            }
          }).fail(function(error) {
            console.log('error', error);
        });
        }
      });
    });

    
</script>