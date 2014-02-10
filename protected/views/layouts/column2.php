<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

		<?php echo $content; ?>


	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>

<?php $this->endContent(); ?>
<!-- Header -->
	<header class="navbar clearfix" id="header">
		<!-- Top Navigation Bar -->
		<div class="container">
		<div class="navbar-brand">
					<!-- COMPANY LOGO -->
					<a href="<?php echo $this->createUrl('site/index');  ?>">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/logo.png" alt="Linden" class="img-responsive" >
					</a>
					<!-- /COMPANY LOGO -->
					<!-- TEAM STATUS FOR MOBILE -->
					<div class="visible-xs">
						<a href="#" class="team-status-toggle switcher btn dropdown-toggle">
							<i class="fa fa-users"></i>
						</a>
					</div>
					<!-- /TEAM STATUS FOR MOBILE -->
					<!-- SIDEBAR COLLAPSE -->
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i>
					</div>
					<!-- /SIDEBAR COLLAPSE -->
				</div>

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- User Login Dropdown -->
				<li class="dropdown user" id="header-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php
							$avatarSrc=Yii::app()->request->baseUrl."/css/ui/img/avatars/at.png";
						?>
						<img alt="" src="<?php echo $avatarSrc; ?>" />
						<span class="username"><?php echo Yii::app()->user->name; ?></span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/user/profile"><i class="fa fa-user"></i> <?php _e('Profil') ?></a></li>
						<li><a href="/site/logout"><i class="fa fa-power-off"></i> <?php _e('Çıkış') ?></a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->
	</header> <!-- /.header -->

	<section id="page">
		<div id="sidebar" class="sidebar">
			<div class="sidebar-menu nav-collapse">
				<!--=== Navigation ===-->
				<ul>
					<li class="current">
						<a href="/site/dashboard">
							<i class="fa fa-tachometer fa-fw"></i>
							<span class="menu-text">Kontrol	Paneli</span>
							</a>
					</li>
					<li>
						<a href="/site/index">
							<i class="fa fa-book fa-fw"></i> <span class="menu-text">
							<?php _e('Kitaplarım'); ?>
						</span>
						</a>
					</li>
					<!--<li>
						<a href="users.html">
							<i class="icon-tasks"></i>
							Hosting
						</a>
					</li>
					-->
					<li>
						<a href="#">
							<i class="fa fa-medkit fa-fw"></i> <span class="menu-text">
							Destek
						</span>
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="fa fa-money fa-fw"></i> <span class="menu-text">
							Hesabım
						</span>
						</a>
					</li>
					
				
				</ul>
				<!-- /Navigation -->
				
			</div>
		</div>
		<!-- /Sidebar -->
	
	<div id="main-content">
		<div class="container">
			<div class="row">
					
		<?php echo $content; ?>

		</div>
	</div>
</section>



</body>
</html>