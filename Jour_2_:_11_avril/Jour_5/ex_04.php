<?php
function my_print_cookie(string $key) {
    if ($_COOKIE != NULL) {
        if (isset($_COOKIE[$key])) {
            echo $_COOKIE[$key] . "_END\n";
        }
    }
}
?>