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
<?=$header;?>

<!-- Main -->
<div class="mainBlock">
	<div class="kyExamination">
		<span class="kyExamination__main">KY examination system</span><br>
		<p class="kyExamination__text">Check your knowledge</p>
	</div>
</div>
<!--  first row buttons  -->
<div class="button__first__line">
	<div>
		<button class="button1" onclick="document.location='/choice_exam.php?type=exam'">
			<img src="/img/new_logo/exam.PNG" width="76" height="57" alt="examination1">
			<span class="button__text">START EXAM</span>
		</button>
	</div>
	<div>
		<button class="button1">
			<img src="/img/new_logo/check.PNG" width="76" height="57" alt="examination2">
			<span class="button__text">CHECK RESULT</span>
		</button>
	</div>
	<div>
		<button class="button1">
			<img src="/img/new_logo/db.PNG" width="76" height="57" alt="examination2">
			<span class="button__text">KNOWLEDGE BASE</span>
		</button>
	</div>
	<div>
		<button class="button1">
			<img src="/img/new_logo/info.PNG" width="76" height="57" alt="examination2">
			<span class="button__text">ABOUT EXAMINATION</span>
		</button>
	</div>
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



