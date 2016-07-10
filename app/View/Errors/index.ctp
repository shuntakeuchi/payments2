<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>申し込み失敗画面</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <?php echo $this->Html->css('css/bootstrap.min')?>
    <!-- jQuery UI -->
    <?php echo $this->Html->css('css/jquery-ui.css')?>
    <!-- jQuery Gritter -->
    <?php echo $this->Html->css('css/jquery.gritter.css')?>
    <!-- Font awesome CSS -->
    <?php echo $this->Html->css('css/font-awesome.min.css')?>
    <!-- Custom CSS -->
    <?php echo $this->Html->css('css/style.css')?>
    <!-- Widgets stylesheet -->
    <?php echo $this->Html->css('css/widgets.css')?>
    <?php echo $this->Html->css('css/mainbar-margin-left0.css')?>

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
      <!-- Main bar -->
      <div class="mainbar">
        <!-- Page heading -->
        <div class="page-head">
          <!-- Page heading -->
          <h2 class="pull-left">申込失敗画面
            <!-- page meta -->
          </h2>
          <!-- Breadcrumb -->

          <div class="clearfix"></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12">

              <!-- Bar Chart -->
              <div class="widget wblue">
              <div class="widget-head">
                <div class="pull-left">申込エラー</div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content" style="text-align:center;">
                <div class="padd">
                <h3>以下の原因により申込が完了できませんでした。</h3>
                <div class="alert alert-danger" role="alert"><?php echo $error ;?></div>
                <h3>お手数ですが担当者までご連絡ください。</h3>
                <h3 style="margin-bottom :60px;">担当 <?php echo $nowall_name ;?>   03-6279-0840</h3>
                <button onclick="location.href='http://nowall.co.jp'" class="btn btn-success btn-lg">画面を閉じる</button>

                </div>

              </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php // echo $this->Html->script('js/jquery.js', array('inline' => false))?>
    <!-- <script src="js/jquery.js"></script> -->
    <!-- Bootstrap JS -->
    <?php //echo $this->Html->js('js/bootstrap.min.js')?>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- jQuery UI -->
    <?php //echo $this->Html->js('js/jquery-ui.min.js')?>
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <!-- jQuery Gritter -->
    <!-- <script src="js/jquery.gritter.min.js"></script> -->
    <!-- Respond JS for IE8 -->
    <!-- <script src="js/respond.min.js"></script> -->
    <!-- HTML5 Support for IE -->
    <!-- <script src="js/html5shiv.js"></script> -->
    <!-- Custom JS -->
    <!-- <script src="js/custom.js"></script> -->
  </body>
</html>

