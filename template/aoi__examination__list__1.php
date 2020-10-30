<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/aoi__examination__list__1.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href="/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>AOI/Examination/list/1</title>
  </head>

    <main class="main__wrapper__title ">
      <h1>[TEST] Koh Young 3D AOI Programming & <br> Operation Test_ENG_(Testing)</h1>
      <p>Please answer on the questions below.</p>
      <p>
      Note: The personal information collected before <br> will not be used for any other purpose. </p>

    </main>

	<?php foreach ($get_question_list as $question):?>
	<?php $flag=strpos($question['description'],'#')?>
        <div class="content__wrapper">
          <div class="form__wrapper">
            <div class="form__icon__number">
              1
            </div>
            <div>
                <?php if(!$flag){$q_part=$question['description'];}else{$q_part=explode("#",$question['description']);$q_part=$q_part[0];}?>
                <p><?=$q_part?></p>
                <img src="<?=$question['image']?>" alt="grab__Process" width="700" height="400">
                    <form action="/ajax_test.php" method="post" autocomplete="off" enctype="multipart/form-data">
                      <input type="text" name="answer" id="answer" placeholder
                      style="width: 690px; height: 40px; 
                      margin-left: 10px">

						<input type="hidden" id="questionID" name="question_id" value="<?=$question['id']?>">
                      <input class="submit__btn" type="submit" value="submit">
                    </form>
            </div>
          </div> 
          <p>Проставка</p>
    </div>
   <?php endforeach;?>

    <footer>

    </footer>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script-a6.js"></script>
  	<script src="/js/question_add_form.js"></script>

</html>

