<?php function theme_login_logo() { ?>
    <style type="text/css">
		body.login{
			background-color:#000;
		}
        #login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/noesis-new-logo.svg);
			background-position:center;
			height:80px;
			width:204px;
			background-size: 204px 80px;
			background-repeat: no-repeat;
			padding-bottom: 0px;
        }
		body.login #nav a,
		body.login #backtoblog a{
			color: #fff;
		}
		body.login #nav a:hover,
		body.login #backtoblog a:hover{
			color: #fff;
		}
		body.login.wp-core-ui .button-primary{
			background-color: #f08b4b;
			color:#ffffff;
			border-radius: 8px;
			border-color:#f08b4b;
		}
		body.login form{
			border-radius: 20px;
			box-shadow: 0 10px 40px 0 rgba(0, 0, 0, 0.1);
			background-color: #ffffff;
			border:0px;
		}
		body.login form .input, 
		body.login input[type=text]{
			border-radius: 8px;
			background-color: #dbdbdb;
			padding-left:20px;
			padding-right: 20px;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'theme_login_logo' );

function theme_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'theme_login_logo_url' );

function theme_login_logo_url_title() {
    return 'Theme title';
}
add_filter( 'login_headertext', 'theme_login_logo_url_title' );