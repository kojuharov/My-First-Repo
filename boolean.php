<?php

function boolean_check( $bool ) {
if ( $bool === True ) {
echo 'test';
}
}
call_user_func('boolean_check', True);

