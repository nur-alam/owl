<?php
/**
 * The main template file
 *
 * @package Tutorowl
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	the_content();
endwhile;


get_footer();
