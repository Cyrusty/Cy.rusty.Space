<?php
if( array_key_exists( 'HTTP_X_HUB_SIGNATURE', $_SERVER ) ) {
        $sig = $_SERVER['HTTP_X_HUB_SIGNATURE'];
        $body = file_get_contents( 'php://input' );
        //$hmac = hash_hmac( 'sha1', $body, trim( file_get_contents( '/var/www/git-update-secret' ) ) );
        //if( 1||$sig === "sha1=$hmac" ) {
        if(1){
                $repo = json_decode( $body )->repository->name;
                exec( "cd /var/www/cy.rusty.space && sudo git pull --no-edit" );
        } else die( 'wrong pwd' );
}
