<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		<title>Bootstrap Simple Registration Form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
			body{
				color: #fff;
				background: #63738a;
				font-family: 'Roboto', sans-serif;
			}
			.form-control{
				height: 40px;
				box-shadow: none;
				color: #969fa4;
			}
			.form-control:focus{
				border-color: #5cb85c;
			}
			.form-control, .btn{        
				border-radius: 3px;
			}
			.signup-form{
				width: 400px;
				margin: 0 auto;
				padding: 30px 0;
			}
			.signup-form h2{
				color: #636363;
				margin: 0 0 15px;
				position: relative;
				text-align: center;
			}
			.signup-form h2:before, .signup-form h2:after{
				content: "";
				height: 2px;
				width: 20%;
				background: #d4d4d4;
				position: absolute;
				top: 50%;
				z-index: 2;
			}	
			.signup-form h2:before{
				left: 0;
			}
			.signup-form h2:after{
				right: 0;
			}
			.signup-form .hint-text{
				color: #999;
				margin-bottom: 30px;
				text-align: center;
			}
			.signup-form form{
				color: #999;
				border-radius: 3px;
				margin-bottom: 15px;
				background: #f2f3f7;
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				padding: 30px;
			}
			.signup-form .form-group{
				margin-bottom: 20px;
			}
			.signup-form input[type="checkbox"]{
				margin-top: 3px;
			}
			.signup-form .btn{        
				font-size: 16px;
				font-weight: bold;		
				min-width: 140px;
				outline: none !important;
			}
			.signup-form .row div:first-child{
				padding-right: 10px;
			}
			.signup-form .row div:last-child{
				padding-left: 10px;
			}    	
			.signup-form a{
				color: #fff;
				text-decoration: underline;
			}
			.signup-form a:hover{
				text-decoration: none;
			}
			.signup-form form a{
				color: #5cb85c;
				text-decoration: none;
			}	
			.signup-form form a:hover{
				text-decoration: underline;
			}  
		</style>
	</head>
	<body>
		<div class="signup-form">
			<form method="POST" action="confirm.php">
				<h2>Criar conta</h2>
				<p class="hint-text">Crie sua conta de usuário. Leva apenas alguns minutos.</p>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="Nome" required="required"></div>
						<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Sobrenome" required="required"></div>
					</div>        	
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Senha" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="confirm_password" placeholder="Repetir senha" required="required">
				</div>        
				<div class="form-group">
					<label class="checkbox-inline"><input type="checkbox" name="confirmation" required="required"> Eu aceito os <a href="#">termos de uso</a> &amp; a <a href="#">política de privadade</a> deste site.</label> 
				</div>
				<div class="form-group">
					<button type="submit" name="passar" class="btn btn-success btn-lg btn-block">Criar usuário</button>
				</div>
			</form>
			<div class="text-center">Já tem usuário? <a href="#">Fazer login</a></div>
		</div>
		
		<script>
			var confirm = document.getElementsByName("confirmation")[0];
			var botao = document.getElementsByName("passar")[0];
			confirm.onchange = status;
			 function status(){
				if(!confirm.checked){
					botao.disabled = true;
				}else{
					botao.disabled = false;
				}	
			};	
			status();
		</script>
	</body>
</html>                            
