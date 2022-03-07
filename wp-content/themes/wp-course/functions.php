<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

?>

