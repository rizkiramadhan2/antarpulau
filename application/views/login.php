<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="<?php echo base_url().'template/js/jquery.js' ?>"></script>
</head>
<body>

	<form action="<?php echo base_url('authentification'); ?>" method="post">
		<input type="text" name="username" required>
		<input type="password" name="password" required>
		<button type="submit">Login</button>
	</form>

	<div id="result"></div>

	<script type="text/javascript">

      $(document).ready(function(){
        $('form').on('submit', function(e){
          e.preventDefault();
          $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
          }).done(function(result){
          	if(result=='fail'){
          		$('#result').html("Login Gagal");
          	}else{
          		alert("blm ada link");
          	}
            
          });
        });
      });

    </script>



</body>
</html>