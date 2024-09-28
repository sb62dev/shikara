<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add the 'pdf_uploader' user role
function custom_add_user_role() {
    add_role('pdf_uploader', 'PDF Uploader', array(
        'read'         => true,
        'upload_files' => true
    ));
}
add_action('init', 'custom_add_user_role');

// Custom upload directory for PDF uploads
function custom_upload_dir($upload) {
    $user = wp_get_current_user();
    if (in_array('pdf_uploader', (array) $user->roles)) {
        $upload['subdir'] = ''; 
        $upload['path'] = ABSPATH . 'shikhara-assets';
        $upload['url'] = home_url('/shikhara-assets');

        if (!file_exists($upload['path'])) {
            mkdir($upload['path'], 0755, true);
        }
        
        $upload['basedir'] = ABSPATH . 'shikhara-assets';
        $upload['baseurl'] = home_url('/shikhara-assets'); 
    }
    return $upload;
}
add_filter('upload_dir', 'custom_upload_dir');

// Add capabilities to the 'pdf_uploader' role
function add_pdf_uploader_capabilities() {
    $role = get_role('pdf_uploader');
    if ($role) {
        $role->add_cap('delete_published_posts');
        $role->add_cap('delete_posts');
        $role->add_cap('delete_attachments'); 
    }
}
add_action('admin_init', 'add_pdf_uploader_capabilities');

// Restrict file uploads to PDFs
function restrict_pdf_upload($file) {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles) && $file['type'] !== 'application/pdf') {
        $file['error'] = 'Only PDF files are allowed.';
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'restrict_pdf_upload');

// Filter media library for PDF uploaders
function filter_media_library($query) {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles) && isset($query['post_type']) && $query['post_type'] === 'attachment') {
        $query['meta_query'] = array(
            array(
                'key' => '_wp_attached_file',
                'value' => 'shikhara-assets/',
                'compare' => 'LIKE'
            )
        );
    }
    return $query;
}
add_filter('ajax_query_attachments_args', 'filter_media_library'); 

// Filter media library list for PDF uploaders
function filter_media_library_list($query) {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles) && is_admin() && $query->is_main_query() && $query->get('post_type') === 'attachment') {
        $query->set('author', wp_get_current_user()->ID); 
        $query->set('meta_query', array(
            array(
                'key' => '_wp_attached_file',
                'value' => 'shikhara-assets/',
                'compare' => 'LIKE'
            )
        ));
    }
}
add_action('pre_get_posts', 'filter_media_library_list'); 

// Update attachment metadata for PDF uploads
function update_attachment_metadata($metadata, $attachment_id) {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles)) {
        $file = get_attached_file($attachment_id);
        if (strpos($file, 'shikhara-assets') !== false) {
            update_post_meta($attachment_id, '_wp_attached_file', $file);
        }
    }
    return $metadata;
}
add_filter('wp_generate_attachment_metadata', 'update_attachment_metadata', 10, 2);

// Remove admin menus for PDF uploaders
function remove_admin_menus_for_pdf_uploader() {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles)) {
        remove_menu_page('index.php');
        remove_menu_page('profile.php');
    }
}
add_action('admin_menu', 'remove_admin_menus_for_pdf_uploader', 999);

// Redirect PDF uploaders to the media library after login
function redirect_pdf_uploader_to_media($redirect_to, $requested_redirect_to, $user) {
    if (isset($user->roles) && in_array('pdf_uploader', (array) $user->roles)) {
        return admin_url('upload.php');
    }
    return $redirect_to;
}
add_filter('login_redirect', 'redirect_pdf_uploader_to_media', 10, 3); 

// Hide media filter and admin notices for PDF uploaders
function hide_media_filter_and_notices_for_pdf_uploader() {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles)) {
        echo '<style>
            #attachment-filter, #wpadminbar #wp-toolbar,
            #screen-meta-links #contextual-help-link-wrap,
            #wpfooter {
                display: none !important;
            }
            #wpadminbar #wp-admin-bar-site-name a.ab-item {
                pointer-events: none;
                cursor: default;
            }
        </style>';
    }
}
add_action('admin_head', 'hide_media_filter_and_notices_for_pdf_uploader');  

// Add logout link to sidebar menu
function add_logout_link_to_sidebar_menu() {
    if (in_array('pdf_uploader', (array) wp_get_current_user()->roles)) {
        add_menu_page(
            'Logout',                   // Page title
            'Logout',                   // Menu title
            'read',                     // Capability
            'logout',                   // Menu slug
            'custom_logout_page',       // Function to display the content
            'dashicons-admin-users',    // Icon 
            100                         // Position 
        );
    }
}
add_action('admin_menu', 'add_logout_link_to_sidebar_menu');

// Custom logout page with redirection
function custom_logout_page() {
    wp_logout();
    echo '<h1>You have been logged out.</h1>';
    echo '<p>Redirecting to the homepage...</p>';
    
    // JavaScript redirect
    echo '<script type="text/javascript">
        setTimeout(function() {
            window.location.href = "' . home_url() . '";
        }, 5000);
    </script>';
    exit; // Ensure no further processing
}  

function enqueue_custom_admin_bar_script_pdf() {
    if (is_user_logged_in() && current_user_can('pdf_uploader')) {
        // Inline JavaScript to hide the admin bar
        $script = "
            document.addEventListener('DOMContentLoaded', function() {
                const adminBar = document.getElementById('wpadminbar');
                if (adminBar) {
                    adminBar.style.display = 'none'; // Hide the admin bar
                }
            });
        ";
        wp_add_inline_script('jquery-core', $script); // Add the inline script after jQuery
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_admin_bar_script_pdf'); 