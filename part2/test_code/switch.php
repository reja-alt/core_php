<!-- <?php 
    $i = 3;
    
    switch($i) {
        case 0:
            echo 'i equals to 0';
        case 1:
            echo 'i equals to 1';
        case 2:
            echo 'i equals to 2';
        case 3:
            echo 'i equals to 3';
            break;
        case 5:
            echo 'i equals to 5';
    }


?> -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Php conditionals</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/estilo.css" type="text/css" media=screen> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <style>
    
    body {
		font-family: 'Varela Round', sans-serif;
	}

	.modal-login {
		color: #636363;
		width: 350px;
	}

	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #00ce81;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}

	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body> -->

<!-- Modal HTML -->

	<!-- <div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
									
			<div class="modal-body">
				<form action="" method="post" name="" id="login">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text"  name= "name_usuario"   class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="text" name ="edad_usuario"  class="form-control" placeholder="Edad" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" name="enviando"  class="btn btn-primary btn-block btn-lg" value="Enviar">
					</div>
				</form>				
				
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>

    </div> -->

</body>
</html>    
<?php 
    if(isset($_POST['enviando'])) {
        $name = $_POST['name_usuario'];
        $age = $_POST['edad_usuario'];
        
        switch(true) {
            case $name = 'reja' && $age >=18 && $age < 120:
                echo 'Welcome reja';
                break;
        }
    }
?> -->

