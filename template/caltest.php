<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/init.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<title>welcom to KohYouhg</title>
</head>

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
<!-- modal window -->
<div class="modal fade in" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign in to Koh Young</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<!-- Форма для email и pass -->
					<!--?php $classname = !empty($errors) ? "form--invalid" : ""; ?-->
					<form action="/index.php"  method="post" class="content_pos" enctype="multipart/form-data"> <!-- Адрес программы или документа, который обрабатывает данные формы. -->
						<!-- форма email -->

						<div class="form-forup">
							<label for="email" class="form_text">Email</label>
							<input  class="form-control input_form_size" id="email" name="email" required>
						</div>
						<!-- форма pass -->
						<div class="form-forup ">
							<label for="password" class="form_text">Password</label>
							<input  class="form-control" id="password" name="password" required>
						</div>
						<!-- кнопка для отправки формы -->
						<button type="submit" class="btn_sign">
							Sing In
						</button>

						<div class="form-forup href_forget_container">
							<a href="#" class="href_font_forget">Forgot my password</a>
						</div>

					</form>

					<div class="form-forup">
						<div class="registration_form">
							<span class="registration_form_text">New to Koh Young?</span>
							<a href="registration.php" class="registration_form_text_sign">Sign up</a>

							<p class="registration_form_text_foot">If you've communicated with our support staff through email previously, you're already registered.
								<br> You probably don't have a password yet, though.
							</p>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
<body>



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






