<div class="mainBlock">
    <div class="kyExamination">
        <span class="kyExamination__main">Maintein examination data</span><br>
        <p class="kyExamination__text">Add new questions</p>
    </div>
</div>
<!--  first row buttons  -->
<div class="container_reg">

    <form action="/ajax_form.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="row">
        <div class="col">
        <div class="form-forup">
            <label for="description" class="form_text">Description*</label>
            <textarea id="description" name="description" class="form-control-description" placeholder="Write the question" required></textarea>
        </div>
        </div>
        <div class="col">
        <div class="form-forup">
                <label for="category" class="form_text">Category<sup>*</sup></label>
                <select id="category" name="category" class="form-control">
                    <option>Choose category</option>
                    <?php foreach ($categories as $category):?>
                        <option <?= 'value="'.$category['id'].'"'; ?>> <?=$category['title'];?></option>
                    <?php endforeach;?>
                </select>

        </div>

        <div class="form-forup">
            <label for="lvl" class="form_text">lvl<sup>*</sup></label>
            <select id="lvl" name="lvl" class="form-control">
                <option>Choose lvl</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>

        <div class="form-forup">
            <label for="img" class="form_text">Image<sup>*</sup></label>
            <div class="">
                <input type="file" name="img" id="img" value="" >
            </div>

        </div>

		<div class="form-forup">
			<input type="checkbox" name="noimage" class="form_text">
			<label for="checkbox" class="red_no_image">No image require</label>
		</div>

        </div>
        </div>
        <!-- кнопка для отправки формы -->
        <button type="submit" id="add" class="btn_reg">
            ADD
        </button>

    </form>

</div>