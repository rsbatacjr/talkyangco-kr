<?php
get_header();
?>
<div class="container">
	<div class="row">
		<div id="qualified-programs-container" class="col-xs-12 col-md-8">
			<div id="qualified-programs">
				<div class="mask">
					<h1>토크 어학 연수 과정</h1>
				<p style="max-width: 400px;">자유롭게 의사소통을 할 수 있는 일반 회화과정부터 취업 준비 및 유학, 이민을 위한 시험 대비 과정까지  다양하게 준비되어 있습니다.</p>
				<div id="course-builder-container">
					<div class="row">
						<div class="col-xs-12">
							<strong>&nbsp;나에게 맞는 코스 둘러보기 :</strong>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://128.199.136.69:81/esl-421-521-611/';">
								<strong>회화과정</strong>
								<p>ESL 521</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://128.199.136.69:81/toiec/';">
								<strong>취업준비</strong>
								<p>Intensive TOEIC</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://128.199.136.69:81/elts/';">
								<strong>유학, 이민</strong>
								<p>Intensive IELTS</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://128.199.136.69:81/family-esl/';">
								<strong>가족연수</strong>
								<p>Family ESL</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div id="about-container" class="col-xs-12 col-sm-6 col-md-4">
			<div id="about">
				<div class="mask">
					<h2>학원 둘러보기</h2>
					<div id="about-normal">
						<p>입학 전 미리 보는 기숙사와 강의실</p>
						<span class="plus-sign">+</span>
						<div class="clearfix"></div>
					</div>
					<div id="about-hover">
						<p>
						입학적엔 토크의 기숙사, 강의실, 부대시설 등을 3D로 보실 수 있습니다. 둘러보신 후에 연수준비물도 함께 보시면 더욱 편안한 기숙사 생활을 하실 수 있습니다.
						</p>
						<span style="position: absolute;bottom: 10px;right: 10px;display: inline-block;margin-bottom: 0;" class="next-button"></span>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
		</div>
		<div id="experience-container" class="col-xs-12 col-sm-6 col-md-4">
			<div id="experience" onclick="javascript:window.location='http://128.199.136.69:81/experiences/';">
				<div class="mask">
					<h2>연수후기</h2>
					<div id="experience-normal">
						<p>학원에 일상생활 미리보기</p>
						<span class="plus-sign">+</span>
					</div>
					<div id="experience-hover">
						<p>
							현재 공부하고 있는 학생들의 생활과 졸업생들의 후기를 보시고 연수오실 때 어떻게 하면 더욱 효과적인 어학연수를 할 수 있을지 생각해보실 수 있습니다.
						</p>
						<span style="position: absolute;bottom: 10px;right: 10px;display: inline-block;margin-bottom: 0;" class="next-button"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="notice-container" class="col-xs-12 col-md-4">
			<div id="notice">
				<a href="http://128.199.136.69:81/notice/" style="text-decoration: none; color: #fff;"><strong>공지사항</strong></a>
				<p>
					토크의 최근 소식들을 미리 보실 수 있으며, 출국 전에 미리미리 확인하여 알찬 어학연수를 준비하시기 바랍니다.
				</p>
				<div id="notice-list-container">
					<div class="row">
						<div class="col-xs-12">
							<span id="notice-plus">+</span>
							<span class="next-button"></span>
						</div>
					</div>
					<ul id="notice-list">
						<?php do_shortcode('[show_topThree post_type="news"]'); ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="plans-container" class="col-xs-12 col-md-8">
			<div id="plans">
				<div class="mask">
					<strong>필리핀어학연수 계획</strong>
					<div id="plan-list-container" class="row">
						<div class="row">
							<div class="col-xs-12">
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>IELTS<br>5.0, 5.5, 6.0</p>
											<span class="plus-sign">+</span>
										</div>	
										<div class="plan-list-hover">
											<a style="color:#666" href='http://128.199.136.69:81/ielts-test/'>
												<p>토크에서 보장하는 IELTS 점수로 해외대학에 입학 및 이민을 준비해 보세요.</p>
												<span class="next-button-black"></span>
											</a>
										</div>
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>스피킹<br>집중과정</p>
											<span class="plus-sign">+</span>
										</div>	
										<div class="plan-list-hover">
											<a style="color:#666" href='http://128.199.136.69:81/intensive-speaking/'>
												<p>문법과 단어는 잘 알지만 회화가 부족하다면 스피킹 집중과정으로 마무리 해보세요.</p>
												<span class="next-button-black"></span>
											</a>
										</div>
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>1~3주<br>단기 어학연수</p>
											<span class="plus-sign">+</span>
										</div>	
										<div class="plan-list-hover">
											<a style="color:#666" href='http://128.199.136.69:81/short-term-study/'>
												<p>시간이 부족하시면 영어에 대한 올바른 공부방법과 회화를 단기에 만들어보세요. </p>
												<span class="next-button-black"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>TOEIC<br>600, 700, 800, 900</p>
											<span class="plus-sign">+</span>
										</div>
										<div class="plan-list-hover">
											<a href="http://128.199.136.69:81/toeic-test/">
												<p>필리핀에서 최초의 보장반을 운영하는 토크에서 TOEIC점수와 TOEIC Speaking을 완벽하게 만들어 바로 취업하세요.</p>
												<span class="next-button-black"></span>
											</a>
										</div>
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>호주, 캐나다<br>연계연수</p>
											<span class="plus-sign">+</span>
										</div>
										<div class="plan-list-hover">
											<a href="http://128.199.136.69:81/philippines-and-other-countries/">
												<p>미국, 캐나다, 호주, 유럽으로 유학을 가기 전에 아직 영어가 서투르다면 토크에서 탄탄하게 기본을 만들어 가세요.</p>
												<span class="next-button-black"></span>
											</a>
										</div>
										
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>저렴한<br>어학연수</p>
											<span class="plus-sign">+</span>
										</div>
										<div class="plan-list-hover">
											<a href="http://128.199.136.69:81/best-price/">
												<p>어학연수 비용이 부담스러우신가요? 토크에 오시면 학생들을 위해 저렴한 어학연수를 준비해 놨습니다.</p>
												<span class="next-button-black"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="best-place-container" class="col-xs-12 col-md-4">
			<div id="best-place">
				<div class="mask">
					<a href="http://128.199.136.69:81/travel/" style="text-decoration: none;color: #fff;"><strong>여행 코스</strong></a>
					<div id="best-place-list-container">
						<ul id="best-place-list">
							<?php do_shortcode('[show_topThree post_type="travel"]'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="campaign-container" class="col-xs-12 col-md-4">
			<div id="campaign">
				<a href="http://128.199.136.69:81/campaigns/" style="text-decoration: none;"><strong>진행중인 캠페인</strong></a>
				<div id="campaign-list-container">
					<ul id="campaign-list">
						<?php do_shortcode('[show_topThree post_type="campaign"]'); ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="calendar-container" class="col-xs-12 col-md-4">
			<div id="calendar">
				<strong>Calendar</strong>
				<div id="calendar-list-container">
					<div class="row">
						<div class="col-xs-12">
							<div class="calendar-list-parent col-xs-6" style="border-right:1px solid #666; border-bottom: 1px solid #666">
								<div class="calendar-list">
									<p><br><a style="color:#666;" href='http://128.199.136.69:81/philippine-holiday/'>필리핀 공휴일</a></p>
								</div>
							</div>
							<div class="calendar-list-parent col-xs-6" style=" border-bottom: 1px solid #666">
								<div class="calendar-list">
									<p><br><a style="color:#666;" href='http://128.199.136.69:81/official-pickup-dates/'>단체픽업</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="calendar-list-parent col-xs-6" style="border-right:1px solid #666">
								<div class="calendar-list">
									<p><br><a style="color:#666;" href='http://128.199.136.69:81/ielts-official-test-dates/'>IELTS<br>공인시험</a></p>
								</div>
							</div>
							<div class="calendar-list-parent col-xs-6">
								<div class="calendar-list">
									<p><br><a style="color:#666;" href='http://128.199.136.69:81/toeic-official-test-dates/'>TOEIC<br>공인시험</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<?php do_shortcode("[show_footerImages post_type='inside-philippines']"); ?>
	</div>
	<!-- <img src="<?php echo THEME_URI; ?>/img/sample-image1.png" class="img-responsive"/> -->
</div>
<div class="row">
	<div class="col-xs-12 clearfix">&nbsp;</div>
</div>
<?php 
get_footer();