<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
try {
    spl_autoload_register( function ( $class ) {
        $prefix = 'NodeewebExtender';
        $baseDir = get_template_directory( __DIR__ ) . '/classes/';
        $len = strlen( $prefix );
        if ( strncmp( $prefix, $class, $len ) !== 0 ) {
            return;
        }
        $relativeClass = substr( $class, $len );
        $theFile = $baseDir . str_replace( '\\', '/', $relativeClass ) . '.class.php';
        if ( file_exists( $theFile ) ) {
            require $theFile;
        }
    } );
} catch ( Exception $e ) {
}