<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

  function submitData(){
    $(document).ready(function(){
      var data = {
        username: $("#username").val(),
        email: $("#email").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          swal("Good job!", "You clicked the button!", "success");
          if(response == "Login Successful"){
            window.location.reload();
            header('location:login.php');
          }
        }
      });
    });
  }
</script>