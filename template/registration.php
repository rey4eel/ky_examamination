<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/init.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<title>welcom to KohYouhg</title>
</head>
<body>
<!-- Header NAv -->
<div class="header">
	<div class="mainimage">
		<img src="/img/img_page_style/main_logo(308width).png" alt="mainLogo" width="635" height="308">
	</div>

	<!-- two buttons nav -->
	<div class="navbar">
		<button type="button" class="btn_transp" style="margin-right: 20px;">Help page</button>
		<button type="button" class="btn_transp" data-toggle="modal" data-target="#exampleModal">Sing in</button>
	</div>
</div>


<?=$modal;?>

<!-- Main -->

<div class="main_registration">
	<div class="ky_registration">
		<span class="">Register your account</span><br>
	</div>
</div>

	<div class="container_reg">

		<form action="registration.php" method="post" autocomplete="off" class="form-forup">

            <?php $errmsg = isset($errors['name']) ? $errors['name'] : ""; ?>
			<div class="form-forup">
				<label for="name" class="form_text">Name* <output class="form_text_error"><?=$errmsg;?></output></label>
				<input id="name" type="text" name="name" class="reg_input_form form-control" placeholder="" required>
			</div>

            <?php $errmsg = isset($errors['email']) ? $errors['email'] : ""; ?>
			<div class="form-forup">
				<label for="email" class="form_text">Email* <output class="form_text_error"><?=$errmsg;?></output></label>
				<input id="email" type="text" name="email" class="reg_input_form form-control" placeholder="" <?= 'value="'.getPostVal('email').'"';?> required>
			</div>
            <?php $errmsg = isset($errors['password']) ? $errors['password'] : ""; ?>
			<div class="form-forup">
				<label for="password" class="form_text">Password* <output class="form_text_error"><?=$errmsg;?></output></label>
				<input id="password" type="password" name="password" class="reg_input_form form-control" placeholder="" required>
			</div>

			<div class="button__first__line check_box_reg">
				<div class="form-forup check_box_reg_margin">
					<input type="checkbox" name="user_right" value="2" class="form_text">
					<label for="checkbox" class="form_text">I am the user</label>

				</div>
				<div class="form-forup">
					<input type="checkbox" name="admin_right" value="1" class="form_text">
					<label for="checkbox" class="form_text">I am the agent</label>
				</div>
			</div>

			<!-- кнопка для отправки формы -->
			<button type="submit" class="btn_reg">
				SUBMIT
			</button>

		</form>
	</div>




<!-- strip -->
<!--  <hr class="underline"> -->
<!-- footer -->
<div class="footer1">
	<p class="footer_copiright">
		Copyright 2019, KOH YOUNG TECHNOLOGY INC. <br>
		The contents of this website are protected by copyright law. <br>
		Copying, reproducing or publishing any content without the permission of the copyright owner is strictly prohibited.
	</p>
</div>
<!-- scripts -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/script-a6.js"></script>
</body>
</html>























