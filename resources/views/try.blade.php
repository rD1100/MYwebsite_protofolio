<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $('body').on('click','#btn',function(){
    //open modal
    $('#addUser').modal('show');
  });
</script>
</head>
<body>
<button  id="btn">
    click me
</button>




</body>

 @include('tryModal')
</html>
