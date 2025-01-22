<?php
/**
 * Plugin Name: Hadesboard CozyStay Core
 * Plugin URI: http://www.hadesboard.com/cozystay
 * Description: CozyStay Theme function extension support for persian languages.
 * Version: 1.6.0
 * Author: Mohamad Gandomi
 * Author URI: http://www.hadesboard.com/
 * Text Domain: loftocean
 * Domain Path: /languages
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

// Plugin constants
define('HB_COZYSTAY_VERSION', '1.6.0');
define('HB_COZYSTAY_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('HB_COZYSTAY_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include enqueue scripts file
require_once HB_COZYSTAY_PLUGIN_DIR . 'includes/enqueue-scripts.php';