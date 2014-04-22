<div class='login-box-mobile logout-box-mobile'>
	<div class='user-info'>
	<? if ($is_admin != 'super') {  ?>
			<div class='user-logged-name'>Welcome, <?=my('nick')?></div>
	<? }?>
			<div class='user-admin'>		
				<img src='<?=$widget_config['url']$widget_config['url']?>/user-image.png'/>
				<span class='edit-prof'><a href="<?=url_bbs()?>/member_confirm.php?url=register_form.php">내 프로필</a></span>
				<? if ($is_admin == 'super') {  ?>
					<span class='admin_link'><a href="<?=x::url_admin()?>">X ADMIN</a><br><a href="<?=g::url()?>/adm">ADMIN</a></span>
				<? }
					else {?>
					<span class='user-scrap'>
							<a href="<?=url_bbs()?>/scrap.php" target="_blank" class='user-scrap'>스크랩</a>
					</span>
				<?}
				?>
				<div style='clear: both'></div>
			</div>
		
		<div class='user-meta'>
			<span class='user-icon-points'>
				<span class='user-points'>
					<img src='<?=$widget_config['url']?>/paper.png'/>
					<? if ( admin() ) {?>
						<a href="<?=url_site_config()?>" class='user-win'>사이트 관리</a>
					<? }
						else {?>	
							<a href="<?=url_bbs()?>/point.php" target="_blank" class='user-win'>포인트</a> <?=g::member_point()?>
					<? }?>
				</span>
			</span>
			
		</div>
		</div>

	<div class='log_out'>
		<a href="<?=url_bbs()?>/logout.php"><img src='<?=$widget_config['url']?>/signout_button.png'/></a>
	</div>

	<div style='clear: both'></div>		
</div> 