<?php

// Define path & url for Content
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content' );

// Set path to MU Plugins.
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/content/plugins-mu' );
define( 'WPMU_PLUGIN_URL', WP_HOME . '/content/plugins-mu' );

// Prevent editing of files through the admin.
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

// Disallow HTML
define( 'DISALLOW_UNFILTERED_HTML', true );
