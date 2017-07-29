<?php
require_once('wp_bootstrap_navwalker.php');
define('HOME_PAGE', "http://talkyangco.dev:7000");
define('THEME_URI', get_template_directory_uri());
require_once('manage-schedule.php');
require_once('manage-weblinks.php');

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'talkyangco_scripts');
function talkyangco_scripts() {
	wp_enqueue_style('bootstrap', THEME_URI.'/css/bootstrap.min.css');
	wp_enqueue_style('style',get_stylesheet_uri());
	// wp_enqueue_script('modernizr-script',THEME_URI.'/js/modernizr-custom.js',array(),'',true);
	// wp_enqueue_script('bootstrap-script',THEME_URI.'/js/bootstrap.min.js',array(),'1.0.0',true);
}

add_action('init','create_schoolbranch_taxonomy');
function create_schoolbranch_taxonomy() {
	register_taxonomy(
		'schoolbranch',
		'post',
		array(
			'label' => 'School Branch',
			'hierarchical' => true,
			'labels' => array(
				'add_new_item' => 'Add New School Branch'
				)
			)
		);
}

add_action('init', 'create_post_type');
function create_post_type() {
	register_post_type(
		'course',
		array(
			'labels' => array(
				'name' => __('Courses'),
				'singular_name' => __('Course'),
				'add_new' => __('New Course'),
				'add_new_item' => __('Add New Course'),
				'new_item' => __('New Course'),
				'edit_item' => __('Edit Course'),
				'view_item' => __('View Course'),
				'all_items' => __('All Courses')
			),
		'menu_icon' => 'dashicons-smiley',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type(
		'travel',
		array(
			'labels' => array(
				'name' => __('Travels'),
				'singular_name' => __('Travel'),
				'add_new' => __('New Travel'),
				'add_new_item' => __('Add New Course'),
				'new_item' => __('New Travel'),
				'edit_item' => __('Edit Travel'),
				'view_item' => __('View Travel'),
				'all_items' => __('All Travels'),
			),
		'menu_icon' => 'dashicons-smiley',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name',
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'revisions',
			)
		)
	);

	register_post_type(
		'faq',
		array('labels' => array(
			'name' => __('FAQs'),
			'singular_name' => __('FAQ'),
			'add_new' => __('New FAQ'),
			'add_new_item' => __('Add New FAQ'),
			'new_item' => __('New FAQ'),
			'edit_item' => __('Edit FAQ'),
			'view_item' => __('View FAQ'),
			'all_items' => __('All FAQs')
			),
		'menu_icon' => 'dashicons-calendar',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type(
		'meal',
		array('labels' => array(
			'name' => __('Meals'),
			'singular_name' => __('Meal'),
			'add_new' => __('New Meal'),
			'add_new_item' => __('Add New Meal'),
			'new_item' => __('New Meal'),
			'edit_item' => __('Edit Meal'),
			'view_item' => __('View Meal'),
			'all_items' => __('All Meals')
			),
		'menu_icon' => 'dashicons-carrot',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type(
		'experience',
		array(
			'labels' => array(
				'name' => __('Experiences'),
				'singular_name' => __('Experience'),
				'add_new' => __('New Experience'),
				'add_new_item' => __('Add New Experience'),
				'new_item' => __('New Experience'),
				'edit_item' => __('Edit Experience'),
				'view_item' => __('View Experience'),
				'all_items' => __('All Experiences')
			),
		'menu_icon' => 'dashicons-smiley',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type('news',
		array(
			'labels' => array(
				'name' => __('News'),
				'singular_name' => __('News'),
				'add_new' => __('New News'),
				'add_new_item' => __('Add New News'),
				'new_item' => __('New News'),
				'edit_item' => __('Edit News'),
				'view_item' => __('View News'),
				'all_items' => __('All News')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('plans',
		array(
			'labels' => array(
				'name' => __('Plans'),
				'singular_name' => __('Plan'),
				'add_new' => __('New Plan'),
				'add_new_item' => __('Add New Plan'),
				'new_item' => __('New Plan'),
				'edit_item' => __('Edit Plan'),
				'view_item' => __('View Plans'),
				'all_items' => __('All Plans')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array('name',
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('campaign',
		array(
			'labels' => array(
				'name' => __('Campaign'),
				'singular_name' => __('Campaign'),
				'add_new' => __('New Campaign'),
				'add_new_item' => __('Add New Campaign'),
				'new_item' => __('New Campaign'),
				'edit_item' => __('Edit Campaign'),
				'view_item' => __('View Campaigns'),
				'all_items' => __('All Campaigns')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('inside-philippines',
		array(
			'labels' => array(
				'name' => __('Inside Philippines'),
				'singular_name' => __('Inside Philippines'),
				'add_new' => __('New Inside Philippines'),
				'add_new_item' => __('Add New Inside Philippines'),
				'new_item' => __('New Inside Philippines'),
				'edit_item' => __('Edit Inside Philippines'),
				'view_item' => __('View Inside Philippines'),
				'all_items' => __('All Inside Philippines')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('best-student-teacher',
		array(
			'labels' => array(
				'name' => __('Best Student/Teacher'),
				'singular_name' => __('Best Student/Teacher'),
				'add_new' => __('New Best Student/Teacher'),
				'add_new_item' => __('Add New Best Student/Teacher'),
				'new_item' => __('New Best Student/Teacher'),
				'edit_item' => __('Edit Best Student/Teacher'),
				'view_item' => __('View Best Student/Teacher'),
				'all_items' => __('All Best Student/Teacher')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);
}

add_action('init', 'register_my_menu');
function register_my_menu() {
  register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'create_schedule_types_table', 1);
register_activation_hook(__FILE__, 'create_schedule_types_table');
function create_schedule_types_table() {
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	global $wpdb;
	global $charset_collate;

	$sql_create_table = "CREATE TABLE {$wpdb->prefix}talk_schedule_types (
          id bigint(20) unsigned NOT NULL auto_increment,
          schedule_name varchar(256) NOT NULL,
          PRIMARY KEY  (id)
    ) $charset_collate; ";

    $sql_create_table .= "CREATE TABLE {$wpdb->prefix}talk_schedule_dates (
          id bigint(20) unsigned NOT NULL auto_increment,
          schedule_id bigint(20) NOT NULL,
          schedule_date varchar(256) NOT NULL,
          PRIMARY KEY  (id)
    ) $charset_collate; ";

    $sql_create_table .= "CREATE TABLE {$wpdb->prefix}page_links (
          id bigint(20) unsigned NOT NULL auto_increment,
          label varchar(32) NOT NULL,
          link_to varchar(256) NOT NULL,
          order_number int NOT NULL,
          PRIMARY KEY  (id)
    ) $charset_collate; ";
 
	dbDelta($sql_create_table);
}

function listByPostType() {
	$htmlResult = "";
	$post_type = get_post_meta(get_the_ID(), "category", true);
	wp_reset_query();
    $args=array('post_type'=>$post_type,'order'=>'DESC');
    $loop=new WP_Query($args);

    if($loop->have_posts()){
    	$col = 0;
        while($loop->have_posts()):$loop->the_post();
        	if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail');;
        	} else {
	        	$thumbnail='';
	        }

        	$col++;
        	if ($col == 1) {
        		$htmlResult.="<div class='row'>";
        	}
        	$htmlResult.="<div class='col-xs-12 col-md-6'>
        					<a href='".get_permalink()."'>
        						<img src='$thumbnail[0]' style='display: block; max-width:100%; max-height:200px; width: auto; height: auto; margin: 0 auto;'><br>
        						<h2>".get_the_title()."</h2>
        						<p>".get_the_excerpt()."</p>
    						</a>
        				  </div>";

        	if ($col == 2) {
        		$htmlResult.="</div>";
        		$col=0;
        	}
        endwhile;
    }

    echo $htmlResult;
}

function listByPostType2() {
        $htmlResult = "<div class='row' style='margin-top: 30px;></div>";
        $post_type = get_post_meta(get_the_ID(), "category", true);
        wp_reset_query();
    $args=array('post_type'=>$post_type,'order'=>'DESC');
    $loop=new WP_Query($args);

    if($loop->have_posts()){
        while($loop->have_posts()):$loop->the_post();
		if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail');;
        	} else {
	        	$thumbnail='';
	        }
                $htmlResult.=
                "
                        <div class='row'>
				<div class='col-xs-4 col-md-3'>
				<a href='".get_permalink()."'>
					<div style='background-image:url($thumbnail[0]);width:100%;height:100%;min-height:150px;background-size:150%;background-position:center;margin-bottom:25px;'></div>
				</a>
				</div>
				<div class='col-xs-8 col-md-9'>
                                <a style='color:#333' href='".get_permalink()."'><h3 style='margin:0;'>".get_the_title()."</h3></a>
                                <strong>".get_the_author()."</strong>
                                <span style='color:#c0c0c0'>".get_the_date('Y.m.d')."</span><br>
                                <p style='line-height:25px;margin-bottom:25px;'>".get_the_excerpt()."</p>
				
				</div><div class='clearfix'></div>
                        </div>
                ";
        endwhile;
    }

    echo $htmlResult;
}

add_shortcode( 'show_footerImages', 'show_footerImages_func' );
function show_footerImages_func($atts, $content = null) {
	$a = shortcode_atts(array(
        'post_type'=>'inside-philippines'
    ), $atts);
	$htmlResult = "";
	$post_type = get_post_meta(get_the_ID(), "category", true);
	wp_reset_query();
    $args=array('post_type'=>$a['post_type'],'order'=>'DESC', 'limit'=>12);
    $loop=new WP_Query($args);

    if($loop->have_posts()){
    	$col = 0;
        while($loop->have_posts()):$loop->the_post();
        	if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail');;
        	} else {
	        	$thumbnail='';
	        }

        	$col++;
        	if ($col == 1) {
        		$htmlResult.="<div class='row'>";
        	}
        	$htmlResult.="<div class='col-xs-2'>
        					<div class='text-center' style='max-height: 200px; display: block; overflow: hidden'>
	        					<a href='".get_permalink()."'>
	        						<img src='$thumbnail[0]' style='display: block; max-width:100%; width: auto; height: auto;'><br>
	    						</a>
    						</div>
        				  </div>";

        	if ($col == 6) {
        		$htmlResult.="</div>";
        		$col=0;
        	}
        endwhile;
    }

    echo $htmlResult;
}

add_action( 'wp_ajax_nopriv_post_consultation_online', 'post_consultation_online' );
add_action( 'wp_ajax_post_consultation_online', 'post_consultation_online' );
function post_consultation_online() {
	extract($_REQUEST);

	$subject = "";
	$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = ['Reply-To: '.$email.' <'.$email.'>'];

	$body = "
	이름: $studentname<br>
	영문이름: $englishname<br>
	이메일: $email<br>
	국가: $country<br>
	전화번호: $phone<br>
	성별: $gender<br>
	나이: $age<br>
	프로그램: $program<br>
	기숙사: $dormitory<br>
	기숙사 유형: $dormitorytype<br>
	유학의 목적: $purpose<br>
	현재 영어 수준: $currentenglevel<br>
	예산: $budget<br>
	어학연수 경험: learningexperience<br>
	연수기간: $trainingperiod<br>
	기타: $others";

	
	wp_mail( "reybatacjr@gmail.com", $subject, $body, $headers );
	echo "OK";
	die();
}

add_shortcode('show_consultation_online_form', 'show_consultation_online_form_func');
function show_consultation_online_form_func() {
	ob_start();
	?>
	<div class="form-horizontal">
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="studentname">이름 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="studentname" name="studentname"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="englishname">영문이름 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="englishname" name="englishname"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="email">이메일 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-10">
						<input class="form-control" id="email" name="email"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="country">국가 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="country" name="country"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="phone">전화번호 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="phone" name="phone"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4">성별</label>
					<div class="col-xs-8">
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="M">남
					    </label>
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="F">여
					    </label>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="age">나이</label>
					<div class="col-xs-8">
						<input class="form-control" id="age" name="age"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="program">프로그램</label>
					<div class="col-xs-8">
						<select class="form-control" id="program" name="program">
							<option value="1">ESL 421, 521, 611</option>
							<option value="2">Intensive IELTS</option>
							<option value="3">Intensive TOEIC</option>
							<option value="4">IELTS Guarantee</option>
							<option value="5">TOEIC Guarantee</option>
							<option value="6">Power Speaking</option>
							<option value="7">Working Holiday</option>
							<option value="8">Family ESL </option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="form-group">
					<label class="control-label col-xs-4">기숙사 유형</label>
					<div class="col-xs-9">
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="1인실">1인실 
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="2인실">2인실
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="3인실">3인실
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="4인실">4인실
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="기타">기타 : 
					</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-offset-4 col-md-4">
			<input class="form-control hidden" id="dormitorytypeother" name="dormitorytypeother"></input>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2">유학의 목적</label>
					<div class="col-xs-10">
					<label class="radio-inline">
						<input type="radio" name="purpose" value="영어회화">영어회화 
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="시험준비">시험준비 
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="취업">취업 
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="연계연수">연계연수/워킹홀리데이 
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="해외취업">해외취업 
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="이민">이민 
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="기타">기타 : 
					</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-offset-2 col-xs-10">
				<input class="form-control hidden" id="purposeother"></input>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="currentenglevel">현재 영어 수준</label>
					<div class="col-xs-8">
						<input class="form-control" id="currentenglevel" name="currentenglevel"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="budget">예산</label>
					<div class="col-xs-8">
						<input class="form-control" id="budget" name="budget"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4">어학연수 경험</label>
					<div class="col-xs-8">
						<label class="radio-inline">
							<input type="radio" name="learningexperience" >있음 
						</label>
						<label class="radio-inline">
							<input type="radio" name="learningexperience" >없음
						</label>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="trainingperiod">연수기간</label>
					<div class="col-xs-8">
						<input class="form-control" id="trainingperiod" name="trainingperiod"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="others">기타</label>
					<div class="col-xs-10">
						<textarea class="form-control" rows=4 width="100%" id="others" name="others"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<button id="send-consultation" class="btn btn-danger">유학상담 신청하기</button>
				</div>
			</div>
		</div>
	</div>
	
    <script src="<?php echo THEME_URI; ?>/js/online-consulting.js"></script>
	<?php
	return ob_get_clean();
}


add_action( 'wp_ajax_nopriv_post_online_registration', 'post_online_registration' );
add_action( 'wp_ajax_post_online_registration', 'post_online_registration' );
function post_online_registration() {
	extract($_REQUEST);

	$subject = "";
	$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = ['Reply-To: '.$email.' <'.$email.'>'];

	$body = "
	이름: $studentname<br>
	영문이름: $englishname<br>
	이메일: $email<br>
	국가: $country<br>
	전화번호: $phone<br>
	성별: $gender<br>
	나이: $age<br>
	프로그램: $program<br>
	기숙사: $dormitory<br>
	기숙사 유형: $dormitorytype<br>
	유학의 목적: $purpose<br>
	현재 영어 수준: $currentenglevel<br>
	예산: $budget<br>
	어학연수 경험: learningexperience<br>
	연수기간: $trainingperiod<br>
	기타: $others";

	
	wp_mail( "reybatacjr@gmail.com", $subject, $body, $headers );
	echo "OK";
	die();
}

add_shortcode('show_online_registration_form', 'show_online_registration_form_func');
function show_online_registration_form_func() {
	ob_start();
	?>
	<div class="form-horizontal">
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="studentname">이름 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="studentname" name="studentname"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="englishname">영문이름 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="englishname" name="englishname"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="email">이메일 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-10">
						<input class="form-control" id="email" name="email"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="country">국가 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="country" name="country"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="phone">전화번호 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="phone" name="phone"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4">성별</label>
					<div class="col-xs-8">
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="M">남
					    </label>
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="F">여
					    </label>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="birthday">생년월일 <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="birthday" name="birthday"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" style="background-color:#c0c0c0;padding:30px 0;margin-bottom: 15px;">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="program1">프로그램1 <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<select class="form-control" id="program1" name="program1">
									<option value="1">ESL 421,</option>
									<option value="2">ESL 521</option>
									<option value="3">ESL, 611</option>
									<option value="4">Intensive IELTS</option>
									<option value="5">Intensive TOEIC</option>
									<option value="6">IELTS Guarantee</option>
									<option value="7">TOEIC Guarantee</option>
									<option value="8">Power Speaking</option>
									<option value="9">Working Holiday</option>
									<option value="10">Family ESL(Parent)</option>
									<option value="11">Family ESL(Junior))</option>
								</select>	
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="dormitory1">생년월일 <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<select class="form-control" id="dormitory1" name="dormitory1">
									<option value="1">Yanco Center 2 ACC</option>
									<option value="2">Yangco Center 3 ACC</option>
									<option value="3">Yangco Center 4 ACC</option>
									<option value="4">E&amp;E Center 1 ACC</option>
									<option value="5">E&amp;E Center 2 ACC</option>
									<option value="6">E&amp;E Center 3 ACC</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="trainingperiod1">연수기간 <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<input class="form-control" id="trainingperiod1" name="trainingperiod1" />
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="program2">프로그램2</label>
							<div class="col-xs-8">
								<select class="form-control" id="program1" name="program2">
									<option value="1">ESL 421,</option>
									<option value="2">ESL 521</option>
									<option value="3">ESL, 611</option>
									<option value="4">Intensive IELTS</option>
									<option value="5">Intensive TOEIC</option>
									<option value="6">IELTS Guarantee</option>
									<option value="7">TOEIC Guarantee</option>
									<option value="8">Power Speaking</option>
									<option value="9">Working Holiday</option>
									<option value="10">Family ESL(Parent)</option>
									<option value="11">Family ESL(Junior))</option>
								</select>	
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="dormitory2">생년월일</label>
							<div class="col-xs-8">
								<select class="form-control" id="dormitory2" name="dormitory2">
									<option value="1">Yanco Center 2 ACC</option>
									<option value="2">Yangco Center 3 ACC</option>
									<option value="3">Yangco Center 4 ACC</option>
									<option value="4">E&amp;E Center 1 ACC</option>
									<option value="5">E&amp;E Center 2 ACC</option>
									<option value="6">E&amp;E Center 3 ACC</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="trainingperiod2">연수기간 <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<input class="form-control" id="trainingperiod2" name="trainingperiod2" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="emergencycontact">비상연락처</label>
					<div class="col-xs-8">
						<input class="form-control" id="emergencycontact" name="emergencycontact"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="emergencyphone">전화번호</label>
					<div class="col-xs-8">
						<input class="form-control" id="emergencyphone" name="emergencyphone"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="relationship">학생과의 관계</label>
					<div class="col-xs-8">
						<input class="form-control" id="relationship" name="relationship"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="memo">메모</label>
					<div class="col-xs-8">
						<textarea class="form-control" id="memo" name="memo"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<button id="send-consultation" class="btn btn-danger">온라인 신청서 보내기</button>
				</div>
			</div>
		</div>
	</div>
	
    <script src="<?php echo THEME_URI; ?>/js/online-consulting.js"></script>
	<?php
	return ob_get_clean();
}