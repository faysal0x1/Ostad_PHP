<?php 
$file_name = "ostad.txt";

if ( file_exists( $file_name ) ) {
    $file = fopen( $file_name, "r+" );

    fseek( $file, 0, SEEK_END );
    $current_date = date( "Y-m-d H:i:s" );

    fwrite( $file, "\n$current_date" );

    fclose( $file );
} else {
    $file = fopen( $file_name, "w" );

    $current_date = date( "Y-m-d H:i:s" );

    fwrite( $file, $current_date );

    fclose( $file );
}

?>