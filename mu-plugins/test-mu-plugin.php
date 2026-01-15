<?php
/**
 * Plugin Name: Test MU Plugin
 * Description: Must-use plugin for testing GitHub deployments on WordPress.com - protected path test
 * Version: 0.1.0
 * Author: @gcsecsey
 * Author URI: http://gcsecsey.dev
 */

add_action(
    'admin_notices', function () {
        echo '<div class="notice notice-info is-dismissible">';
        echo '<p><strong>Test MU Plugin:</strong> This must-use plugin was deployed from the sandbox-gh-deployments repo</p>';
        echo '</div>';
    }
);
