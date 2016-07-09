<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>商材一覧画面</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<!-- <link href="theme/css/bootstrap.min.css" rel="stylesheet"> -->
		<?php echo $this->Html->css('css/bootstrap.min')?>
		<!-- jQuery UI -->
		<!-- <link rel="stylesheet" href="theme/css/jquery-ui.css"> -->
		<?php echo $this->Html->css('css/jquery-ui.css')?>
		<!-- jQuery Gritter -->
		<!-- <link rel="stylesheet" href="theme/css/jquery.gritter.css"> -->
		<?php echo $this->Html->css('css/jquery.gritter.css')?>
		<!-- Font awesome CSS -->
		<!-- <link href="theme/css/font-awesome.min.css" rel="stylesheet"> -->
		<?php echo $this->Html->css('css/font-awesome.min.css')?>
		<!-- Custom CSS -->
		<?php echo $this->Html->css('css/style.css')?>
		<!-- <link href="theme/css/style.css" rel="stylesheet"> -->
		<!-- Widgets stylesheet -->
		<?php echo $this->Html->css('css/widgets.css')?>
		<?php echo $this->Html->css('css/mainbar-margin-left0.css')?>
		<!-- <link href="theme/css/widgets.css" rel="stylesheet"> -->

		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
			<div class="container">
				<!-- Menu button for smallar screens -->
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand"> <span class="bold">ELITES</span></a>
				</div>
			</div>
		</div>

		<!-- Main content starts -->
		<div class="content">
			<!-- Sidebar -->

			<!-- Sidebar ends -->

			<!-- Main bar -->
			<div class="mainbar">
				<!-- Page heading -->
				<div class="page-head">
					<!-- Page heading -->
					<h2 class="pull-left">商材一覧画面
						<!-- page meta -->

					</h2>
					<!-- Breadcrumb -->

					<div class="clearfix"></div>
					</div>

				<!-- 商品一覧の作成 -->
				<div class="container">
					<div class="col-sm-12">
						<!-- <div style = "width:800px;margin:0 auto; "> -->
							<?php foreach($items as $item) :?>
								<?=$this->Html->link('
								<table style="border:solid 1px #000; margin-bottom:10px; width:100%;">'
								,array('action'=>'id',$item['Item']['cha_rec_id'])
								,array('escape' =>false)
								)?>
									<tr>
										<td style = "width:30%;"><?=$item['Item']['name']?>
										</td>
										<td style = "width:70%; border-left:solid 1px #000;"><?=$item['Item']['description']?><br><?=$item['Item']['amount']?>円
										</td>
									</tr>
								</table>
							<?php endforeach ;?>
						</div>
					</div>
								<style type="text/css">
								a {
								    -webkit-transition: .5s;
								    -moz-transition: .5s;
								    -ms-transition: .5s;
								    -o-transition: .5s;
								    transition: .5s;
								}
								a:hover {
								color:#87ceeb;
								text-decoration:underline;
								opacity: .3;
								}
								</style>

							<!-- ページネーション機能 -->
							<div style = "text-align:center;">
							<?php
							echo $this->Paginator->prev('< 前へ ');
							echo $this->Paginator->numbers();
							echo $this->Paginator->next(' 次へ >');
							?>
							</div>


		<!-- Scroll to top -->

		<!-- Javascript files -->
		<!-- jQuery -->
		<?php // echo $this->Html->script('js/jquery.js', array('inline' => false))?>
		<!-- <script src="js/jquery.js"></script> -->
		<!-- Bootstrap JS -->
		<?php //echo $this->Html->js('js/bootstrap.min.js')?>
		<!-- <script src="js/bootstrap.min.js"></script> -->
		<!-- jQuery UI -->
		<?php //echo $this->Html->js('js/jquery-ui.min.js')?>
		<!-- <script src="js/jquery-ui.min.js"></script> -->
		<!-- jQuery Gritter -->
		<script src="js/jquery.gritter.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>
</html>