<div class="header">
	<div class="mainimage">
		<img src="/img/img_page_style/main_logo(308width).png" alt="mainLogo" width="635" height="308">
	</div>

	<!-- two buttons nav -->
	<div class="navbar">
		<button type="button" class="btn_transp" style="margin-right: 20px;">Help page</button>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle btn_transp" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$user_name;?>
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
				<button class="dropdown-item form_text" type="button">My activities</button>
				<button class="dropdown-item form_text"  type="button">My profile</button>
				<button class="dropdown-item form_text" type="button" onclick="document.location='/logout.php'">Sign out</button>
			</div>
		</div>
	</div>
</div>