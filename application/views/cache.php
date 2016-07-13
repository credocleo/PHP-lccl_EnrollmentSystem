<?php
Header( "Last-Modified: " . gmdate( "D, j M Y H:i:s" ) . " GMT" );
Header( "Expires: " . gmdate( "D, j M Y H:i:s", time() ) . " GMT" );
Header( "Cache-Control: no-store, no-cache, must-revalidate" ); // HTTP/1.1
Header( "Cache-Control: post-check=0, pre-check=0", FALSE );
Header( "Pragma: no-cache" ); // HTTP/1.0?>