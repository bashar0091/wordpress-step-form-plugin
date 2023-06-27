<?php

/**
 * Plugin Name: Step Calculator
 * Plugin URI: bashar0091.github.io/awalbasharofficial
 * Description: Step Form Caculator
 * Version: 1.0.0
 * Author: Awal Bashar
 * Author URI: bashar0091.github.io/awalbasharofficial
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// includes all files here 

// Register custom template form step form 
function register_form_template($templates) {
    $templates['step-form.php'] = 'Step Form';
    return $templates;
}
add_filter('theme_page_templates', 'register_form_template');

function register_form_tempalte_load($template) {
    if (is_page_template('step-form.php')) {
        $custom_template = plugin_dir_path(__FILE__) . 'includes/step-form/step-form.php';
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'register_form_tempalte_load');