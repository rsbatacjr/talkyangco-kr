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
    <script type="text/javascript">
	var adminajax = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

    </script>

</head>
	<body>
    <!-- <div id="floating-search-tb" class="hidden">
      <div class="input-group">
          <input id="s" type="text" class="form-control"/>
          <span class="input-group-addon">
              <i class="fa fa-search"></i>
          </span>
      </div>
    </div> -->
    <div id="floating-menu" class="hidden hidden-xs hidden-sm">
      <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-8">
                <a id="logo" class="navbar-brand" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important;position:absolute; top: 1px;left:1px"></a>
                <ul class="nav navbar-nav">
                  <li class="dropdown-submenu">
                    <a href="http://128.199.136.69:81/about-us/">학교소개</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://128.199.136.69:81/about-us/">연혁</a></li>
                      <li><a href="http://128.199.136.69:81/greetings/">인사말</a></li>
                      <li><a href="http://128.199.136.69:81/strengths/">특징</a></li>
                      <li><a href="http://128.199.136.69:81/location/">오시는 길</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/procedure/">유학까지의 흐름</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://128.199.136.69:81/procedure/">유학까지의 흐름</a></li>
                      <li><a href="http://128.199.136.69:81/about-preparation/">유학준비에 대해</a></li>
                      <li><a href="http://128.199.136.69:81/faqs/">FAQ</a></li>
                      <li><a href="http://128.199.136.69:81/medical-and-insurance/">의료 체제와 보험</a></li>
                      <li><a href="http://128.199.136.69:81/way-to-baguio/">바기오 가는 방법</a></li>
                      <li><a href="http://128.199.136.69:81/campaigns/">캠페인</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/tuition-fee/">연수비용</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://128.199.136.69:81/tuition-fee/">연수비용안내</a></li>
                      <li><a href="http://128.199.136.69:81/dormitory-type/">기숙사안내</a></li>
                      <li><a href="http://128.199.136.69:81/miscellaneous-fee/">현지비용</a></li>
                      <li><a href="http://128.199.136.69:81/ielts-official-test-dates/">IELTS  시험 일정</a></li>
                      <li><a href="http://128.199.136.69:81/toeic-official-test-dates/">TOEIC 시험 일정</a></li>
                      <li><a href="http://128.199.136.69:81/philippine-holiday/">필리핀 휴일</a></li>
                      <li><a href="http://128.199.136.69:81/official-pickup-dates/">정규픽업일</a></li>
                      <li><a href="http://128.199.136.69:81/refund-policy/">환불규정</a></li>
                      <li><a href="http://128.199.136.69:81/online-registration/">온라인 신청서</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/more-about-talk">토크의 학습방법</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://128.199.136.69:81/yangco-esl/">ESL 421, 521, 611</a></li>
                      <li><a href="http://128.199.136.69:81/elts/">IELTS</a></li>
                      <li><a href="http://128.199.136.69:81/toiec/">TOEIC</a></li>
                      <li><a href="http://128.199.136.69:81/power-speaking/">Power Speaking</a></li>
                      <li><a href="http://128.199.136.69:81/job-ready/">Working Holiday</a></li>
                      <li><a href="http://128.199.136.69:81/family-esl/">Family ESL</a></li>
                      <li><a href="http://128.199.136.69:81/online-consultation/">연수상담</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/philippine-language-study-plan">필리핀어학연수계획</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://128.199.136.69:81/toeic-test/">TOEIC 시험</a></li>
                      <li><a href="http://128.199.136.69:81/ielts-test/">IELTS 시험</a></li>
                      <li><a href="http://128.199.136.69:81/intensive-speaking/">스피킹 집중</a></li>
                      <li><a href="http://128.199.136.69:81/short-term-study/">1~3주 단기 어학연수</a></li>
                      <li><a href="http://128.199.136.69:81/long-term-study/">장기유학</a></li>
                      <li><a href="http://128.199.136.69:81/best-price/">저렴한 어학연수</a></li>
                      <li><a href="http://128.199.136.69:81/philippines-and-other-countries/">호주, 캐나다 연계연수</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/notice/">커뮤니티</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://128.199.136.69:81/notice/">공지사항</a></li>
                      <li><a href="http://128.199.136.69:81/experiences/">연수후기</a></li>
                      <li><a href="http://128.199.136.69:81/meals/">토크의 식단</a></li>
                      <li><a href="http://128.199.136.69:81/inside-philippine/">미리보는 필리핀</a></li>
                      <li><a href="http://128.199.136.69:81/best-students-and-teachers/">명예의 전당</a></li>
                      <li><a href="http://128.199.136.69:81/travel/">여행</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="row">
                  <div class="search-lens">
                    <span class="fa fa-search"></span>
                    <div class="floating-search-tb hidden">
                      <div class="input-group">
                        <form action="/" method="get" role="search">
                            <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                            <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                <i class="fa fa-search"></i>
                            </span>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
		<div class="container-fluid">
      <div class="row">
        <header>
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
                    <a id="logo" class="navbar-brand visible-xs" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important; margin-bottom: 25px;"></a>
                    <div class="hidden-xs row" style="position: absolute; top: 16px;">
                      <div class="container">
                      <div class="col-xs-12 col-md-8">
                        <div id="login-box" class="hidden">
                          <hr style="margin-top: 5px;">
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-4">
                        <div id="quick-links">
                          <a href="http://128.199.136.69:81/wp-content/uploads/2017/08/Brochure-1700519KR.pdf" target="_blank">안내책자</a> | <a href="http://128.199.136.69:81/wp-content/uploads/2017/08/KOREA-TALK-OT-170329.pdf" target="_blank">OT자료</a> | <a href="http://128.199.136.69:81/online-consultation/">상담문의</a>
                        </div>
                      </div>
                      </div>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-xs">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  <div class="collapse navbar-collapse" id="example-navbar-collapse-xs">
                    <ul class="nav navbar-nav">
                      <li class="mobile-dropdown">
                      <span data-toggle="collapse" data-target="#first-mobile-menu">연혁</span>
                        <ul id="first-mobile-menu" class="collapse">
                          <li><a href="http://128.199.136.69:81/about-us/">연혁</a></li>
                          <li><a href="http://128.199.136.69:81/greetings/">인사말</a></li>
                          <li><a href="http://128.199.136.69:81/strengths/">특징</a></li>
                          <li><a href="http://128.199.136.69:81/location/">오시는 길</a></li>
                        </ul>
                      </li>
                      <li class="mobile-dropdown">
                          <span data-toggle="collapse" data-target="#second-mobile-menu">유학까지의 흐름</span>
                          <ul id="second-mobile-menu" class="collapse">
                            <li><a href="http://128.199.136.69:81/procedure/">유학까지의 흐름</a></li>
                            <li><a href="http://128.199.136.69:81/about-preparation/">유학준비에 대해</a></li>
                            <li><a href="http://128.199.136.69:81/faqs/">FAQ</a></li>
                            <li><a href="http://128.199.136.69:81/medical-and-insurance/">의료 체제와 보험</a></li>
                            <li><a href="http://128.199.136.69:81/way-to-baguio/">바기오 가는 방법</a></li>
                            <li><a href="http://128.199.136.69:81/campaigns/">캠페인</a></li>
                          </ul>
                        </li>
                        <li class="mobile-dropdown">
                          <span data-toggle="collapse" data-target="#third-mobile-menu">연수비용</span>
                          <ul id="third-mobile-menu" class="collapse">
                            <li><a href="http://128.199.136.69:81/tuition-fee/">연수비용안내</a></li>
                            <li><a href="http://128.199.136.69:81/dormitory-type/">기숙사안내</a></li>
                            <li><a href="http://128.199.136.69:81/miscellaneous-fee/">현지비용</a></li>
                            <li><a href="http://128.199.136.69:81/ielts-official-test-dates/">IELTS  시험 일정</a></li>
                            <li><a href="http://128.199.136.69:81/toeic-official-test-dates/">TOEIC 시험 일정</a></li>
                            <li><a href="http://128.199.136.69:81/philippine-holiday/">필리핀 휴일</a></li>
                            <li><a href="http://128.199.136.69:81/official-pickup-dates/">정규픽업일</a></li>
                            <li><a href="http://128.199.136.69:81/refund-policy/">환불규정</a></li>
                            <li><a href="http://128.199.136.69:81/online-registration/">온라인 신청서</a></li>
                          </ul>
                        </li>
                        <li class="mobile-dropdown">
                          <span data-toggle="collapse" data-target="#fourth-mobile-menu">토크의 학습방법</span>
                          <ul id="fourth-mobile-menu" class="collapse">
                            <li><a href="http://128.199.136.69:81/yangco-esl/">ESL 421, 521, 611</a></li>
                            <li><a href="http://128.199.136.69:81/elts/">IELTS</a></li>
                            <li><a href="http://128.199.136.69:81/toiec/">TOEIC</a></li>
                            <li><a href="http://128.199.136.69:81/power-speaking/">Power Speaking</a></li>
                            <li><a href="http://128.199.136.69:81/job-ready/">Working Holiday</a></li>
                            <li><a href="http://128.199.136.69:81/family-esl/">Family ESL</a></li>
                            <li><a href="http://128.199.136.69:81/online-consultation/">연수상담</a></li>
                          </ul>
                        </li>
                        <li class="mobile-dropdown">
                          <<span data-toggle="collapse" data-target="#fifth-mobile-menu">필리핀어학연수계획</span>
                          <ul id="fifth-mobile-menu" class="collapse">
                            <li><a href="http://128.199.136.69:81/toeic-test/">TOEIC 시험</a></li>
                            <li><a href="http://128.199.136.69:81/ielts-test/">IELTS 시험</a></li>
                            <li><a href="http://128.199.136.69:81/intensive-speaking/">스피킹 집중</a></li>
                            <li><a href="http://128.199.136.69:81/short-term-study/">1~3주 단기 어학연수</a></li>
                            <li><a href="http://128.199.136.69:81/long-term-study/">장기유학</a></li>
                            <li><a href="http://128.199.136.69:81/best-price/">저렴한 어학연수</a></li>
                            <li><a href="http://128.199.136.69:81/philippines-and-other-countries/">호주, 캐나다 연계연수</a></li>
                          </ul>
                        </li>
                      <li class="mobile-dropdown">
                        <span data-toggle="collapse" data-target="#sixth-mobile-menu">커뮤니티</span>
                        <ul id="sixth-mobile-menu" class="collapse">
                          <li><a href="http://128.199.136.69:81/notice/">공지사항</a></li>
                          <li><a href="http://128.199.136.69:81/experiences/">연수후기</a></li>
                          <li><a href="http://128.199.136.69:81/meals/">토크의 식단</a></li>
                          <li><a href="http://128.199.136.69:81/inside-philippine/">미리보는 필리핀</a></li>
                          <li><a href="http://128.199.136.69:81/best-students-and-teachers/">명예의 전당</a></li>
                          <li><a href="http://128.199.136.69:81/travel/">여행</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse navbar-collapse hidden-xs" id="example-navbar-collapse">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                    <a id="logo" class="navbar-brand" style="position:absolute;top: -55px; left: -40px;" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png"></a>

                      <ul class="nav navbar-nav">
                        <li class="dropdown-submenu">
                          <a href="/about-us/">학교소개</a>
                          <ul class="dropdown-menu">
                            <li><a href="http://128.199.136.69:81/about-us/">연혁</a></li>
                            <li><a href="http://128.199.136.69:81/greetings/">인사말</a></li>
                            <li><a href="http://128.199.136.69:81/strengths/">특징</a></li>
                            <li><a href="http://128.199.136.69:81/location/">오시는 길</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a href="/procedure/">유학까지의 흐름</a>
                          <ul class="dropdown-menu">
                            <li><a href="http://128.199.136.69:81/procedure/">유학까지의 흐름</a></li>
                            <li><a href="http://128.199.136.69:81/about-preparation/">유학준비에 대해</a></li>
                            <li><a href="http://128.199.136.69:81/faqs/">FAQ</a></li>
                            <li><a href="http://128.199.136.69:81/medical-and-insurance/">의료 체제와 보험</a></li>
                            <li><a href="http://128.199.136.69:81/way-to-baguio/">바기오 가는 방법</a></li>
                            <li><a href="http://128.199.136.69:81/campaigns/">캠페인</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a href="/tuition-fee/">연수비용</a>
                          <ul class="dropdown-menu">
                            <li><a href="http://128.199.136.69:81/tuition-fee/">연수비용안내</a></li>
                            <li><a href="http://128.199.136.69:81/dormitory-type/">기숙사안내</a></li>
                            <li><a href="http://128.199.136.69:81/miscellaneous-fee/">현지비용</a></li>
                            <li><a href="http://128.199.136.69:81/ielts-official-test-dates/">IELTS  시험 일정</a></li>
                            <li><a href="http://128.199.136.69:81/toeic-official-test-dates/">TOEIC 시험 일정</a></li>
                            <li><a href="http://128.199.136.69:81/philippine-holiday/">필리핀 휴일</a></li>
                            <li><a href="http://128.199.136.69:81/official-pickup-dates/">정규픽업일</a></li>
                            <li><a href="http://128.199.136.69:81/refund-policy/">환불규정</a></li>
                            <li><a href="http://128.199.136.69:81/online-registration/">온라인 신청서</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a href="/more-about-talk">토크의 학습방법</a>
                          <ul class="dropdown-menu">
                            <li><a href="http://128.199.136.69:81/yangco-esl/">ESL 421, 521, 611</a></li>
                            <li><a href="http://128.199.136.69:81/elts/">IELTS</a></li>
                            <li><a href="http://128.199.136.69:81/toiec/">TOEIC</a></li>
                            <li><a href="http://128.199.136.69:81/power-speaking/">Power Speaking</a></li>
                            <li><a href="http://128.199.136.69:81/job-ready/">Working Holiday</a></li>
                            <li><a href="http://128.199.136.69:81/family-esl/">Family ESL</a></li>
                            <li><a href="http://128.199.136.69:81/online-consultation/">연수상담</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a href="/philippine-language-study-plan">필리핀어학연수계획</a>
                          <ul class="dropdown-menu">
                            <li><a href="http://128.199.136.69:81/toeic-test/">TOEIC 시험</a></li>
                            <li><a href="http://128.199.136.69:81/ielts-test/">IELTS 시험</a></li>
                            <li><a href="http://128.199.136.69:81/intensive-speaking/">스피킹 집중</a></li>
                            <li><a href="http://128.199.136.69:81/short-term-study/">1~3주 단기 어학연수</a></li>
                            <li><a href="http://128.199.136.69:81/long-term-study/">장기유학</a></li>
                            <li><a href="http://128.199.136.69:81/best-price/">저렴한 어학연수</a></li>
                            <li><a href="http://128.199.136.69:81/philippines-and-other-countries/">호주, 캐나다 연계연수</a></li>
                          </ul>
                        </li>
                      <li class="dropdown-submenu">
                        <a href="/notice/">커뮤니티</a>
                        <ul class="dropdown-menu">
                          <li><a href="http://128.199.136.69:81/notice/">공지사항</a></li>
                          <li><a href="http://128.199.136.69:81/experiences/">연수후기</a></li>
                          <li><a href="http://128.199.136.69:81/meals/">토크의 식단</a></li>
                          <li><a href="http://128.199.136.69:81/inside-philippine/">미리보는 필리핀</a></li>
                          <li><a href="http://128.199.136.69:81/best-students-and-teachers/">명예의 전당</a></li>
                          <li><a href="http://128.199.136.69:81/travel/">여행</a></li>
                        </ul>
                      </li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                      <div class="row">
                        <div class="search-lens">
                          <span class="fa fa-search"></span>
                          <div class="floating-search-tb hidden">
                            <div class="input-group">
                              <form action="/" method="get" role="search">
                                  <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                                  <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                      <i class="fa fa-search"></i>
                                  </span>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </nav>
            </div>
        </header>
      </div>
