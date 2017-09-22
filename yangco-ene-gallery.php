<?php 
/*
 * Template Name: Yangco E&E Gallery
 */
	get_header("mobile");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>기숙사 안내</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 style="background-color:#fff;padding:15px !important;border-radius:8px;border:1px solid #333;">Yangco Center</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-1 col-xs-12 col-md-10">
			<?= listGalleryImage('yangco-gallery'); ?>
		</div>
	</div>
	<div class="row">
                <div class="col-xs-12">
                        <h2 style="background-color:#fff;padding:15px !important;border-radius:8px;border:1px solid #333;">E&E Center</h2>
                </div>
        </div>
	<div class="row">
		<div class="col-md-offset-1 col-xs-12 col-md-10">
			<?= listGalleryImage('ene-gallery'); ?>
		</div>
	</div>
</div>
<div class="row">
<div style="background-color: rgb(37,109,56); padding: 20px 0; color: #fff">
        <div class="container">
                <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <a href="http://talk-academy.kr/official-pickup-dates/" style="background-color: transparent; border-radius: 10px; border: 1px solid #fff; padding: 10px;display:block;color:#fff;text-align:center;">단체픽업일</a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <p style="line-height: 40px;">
                                연수비용 확인 후에 원하시는 출국 날짜를 선택하실 수 있습니다.
                                </p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <a href="http://talk-academy.kr/experiences/" style="background-color: transparent; border-radius: 10px; border: 1px solid #fff; padding: 10px;display:block;color:#fff;text-align:center;">연수후기</a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <p style="line-height: 40px;">
                                공부중인 학생들의 연수후기를 미리 보실 수 있습니다.
                                </p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <a href="http://3d.jesolution.co.kr/canitalk/talk_yangco/" style="background-color: transparent; border-radius: 10px; border: 1px solid #fff; padding: 10px;display:block;color:#fff;text-align:center;">3D학원시설 보기</a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <p style="line-height: 40px;">
                                어학연수 신청을 하시거나 상담을 원하시면 언제든 문의해주세요
                                </p>
                        </div>
                </div>
        </div>
</div>
</div>
<?php
	get_footer("mobile");
