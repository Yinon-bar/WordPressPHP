

<?php

function loadCss()
{
  wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, 'all');
  wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'loadCss');

function loadScripts()
{
  wp_enqueue_script('jquery');
  wp_register_script('bootstrapJs', get_template_directory_uri() . "/js/bootstrap.min.js", 'jquery', false, true);
  wp_enqueue_script('bootstrapJs');
}

add_action('wp_enqueue_scripts', 'loadScripts');
