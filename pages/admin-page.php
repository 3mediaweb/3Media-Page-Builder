<?php

function three_media_page_builder_admin_page_function() {

	// Settings Fields

	$header_group = settings_fields( 'header_group' );

	// Register Settings

	$logo_setting = register_setting( 'header_group', $option_name, $sanitize_callback );
    ?>
    <div class="wrap">
        <h2>3Media Page Builder - General Settings</h2>
        <div>Here is where the settings will go.</div>
        <form>
        	
        </form>
    </div>
    <?php
}