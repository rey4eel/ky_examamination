 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <?php if(!empty($errors['email'])){$classname ="";}else{$classname ='';}?>

                <div class="form-forup <?=$classname;?>">
                  <label for="email" class="form_text">Email</label>
                  <input  class="form-control input_form_size" id="email" name="email" required <?= 'value="'.getPostVal('email').'"';?>>
                </div>
                <!-- форма pass -->
                  <?php if(!empty($errors['password'])){$classname ="";}else{$classname ='';}?>
                  <?php if(!empty($errors['password'])){$classname =1;}else{$classname ='';}?>
                <div class="form-forup ">
                  <label for="password" class="form_text">Password <?=$classname;?></label>
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