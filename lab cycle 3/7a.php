<?php

if (isset($_COOKIE['username'])) {
    echo 'Username received: ' .$_COOKIE['username'];
} else {
    echo 'No username found. Please try again
    !';
}

?>