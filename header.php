<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style type="text/css">
      html {
        margin: 0 !important;
      }
    </style>
	<script type="text/javascript" src="<?php echo THEME_URI ?>/js/jquery.min.js"></script>
    <script type="javascript/text">
	var adminajax = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    </script>
</head>
	<body onscroll="checkTop();">
<div id="floating-search-tb" class="hidden">
<div class="input-group">
    <input id="s" type="text" class="form-control"/>
    <span class="input-group-addon">
        <i class="fa fa-search"></i>
    </span>
</div>
</div>
<div id="floating-menu" class="hidden">
          <div class="container">
<div class="col-xs-12 col-sm-12 col-md-8">
                    <ul class="nav navbar-nav">
                      <li><a href="http://128.199.136.69:81/about-us/">학교소개</a></li>
                      <li><a href="http://128.199.136.69:81/procedure/">유학까지의 흐름</a></li>
                      <li><a href="#">연수비용</a></li>
                      <li><a href="#">토크의 학습방법</a></li>
                      <li><a href="#">필리핀어학연수계획</a></li>
                      <li><a href="#">커뮤니티</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="row">
<div class="search-lens">
  <span class="fa fa-search"></span>
  <!-- <input placeholder="수색"> -->
</div>
                    </div>
                  </div>

          </div>
        </div>

		<div class="container-fluid">
<div class="row">      <header>
         <div id="weblinks">
            <div class="container">
              <a href="" style="border: 1px solid #fff; padding: 3px 5px; font-size: 12px; border-radius: 3px">AGENCY</a>&nbsp;&nbsp;
              <a href="#">ENG</a>
              <a href="#">JPN</a>
              <a href="#">TW</a>
              <a href="#">CN</a>
              <a href="#">VN</a>
            </div>
          </div>
          <div class="container">
              <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <p class="visible-xs" style="position: absolute; top: 15px; right: 65px;"><a href="#">Sign in</a> / <a href="#">Join</a> | Menu</p>
                  <div class="hidden-xs row" style="position: absolute; top: 16px;">
                    <div class="container">
                      <div class="col-xs-12 col-md-8">
                        <div id="login-box">
                          <a href="#">Sign in</a> / <a href="#">Join</a>
                          <hr style="margin-top: 5px;">
                        </div>
                      </div>
                    <div class="col-xs-12 col-md-4">
                      <div id="quick-links">
                        <a href="#">안내책자</a> | <a href="#">OT자료</a> | <a href="#">상담문의</a>
                      </div>
                    </div>
                    </div>
                  </div>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a id="logo" class="navbar-brand" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                  <div class="col-xs-12 col-sm-12 col-md-8">
                    <ul class="nav navbar-nav">
                      <li><a href="http://128.199.136.69:81/about-us/">학교소개</a></li>
                      <li><a href="http://128.199.136.69:81/procedure/">유학까지의 흐름</a></li>
                      <li><a href="#">연수비용</a></li>
                      <li><a href="#">토크의 학습방법</a></li>
                      <li><a href="#">필리핀어학연수계획</a></li>
                      <li><a href="#">커뮤니티</a></li>
                    </ul>
                  </div>
		  <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="row">
<div class="search-lens">
  <span class="fa fa-search"></span>
</div>
                    </div>
                  </div>
                </div>
              </nav>
          </div>
      </header></div>
