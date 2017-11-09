 <!-- jQuery -->
 <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

<?php function wpbootstrap_scripts_with_jquery() {
    
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery') );
    wp_register_script( 'jq', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array('jquery') );
    wp_register_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js' );
    wp_register_script( 'validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery') );
    wp_register_script( 'contact', get_template_directory_uri() . '/js/contact_me.js', array('jquery') );
    wp_register_script( 'freelancer', get_template_directory_uri() . '/js/freelancer.min.js', array('jquery') );
    
    wp_enqueue_script( 'bootstrap');
    wp_enqueue_script( 'jq');
    wp_enqueue_script( 'easing');
    wp_enqueue_script( 'validation');
    wp_enqueue_script( 'contact');
    wp_enqueue_script( 'freelancer');
    
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

show_admin_bar(false)?>