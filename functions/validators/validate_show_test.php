<?php
function test_allowed (mysqli $connection,?string $get_id,?string $get_code,?string $user_id ) :?string {
    $last_test = check_last_test($connection,$get_code,$user_id);
    $result = return_single_string($last_test);

    if ($get_id == $result){
        return "This test already done";
    }

return null;
}