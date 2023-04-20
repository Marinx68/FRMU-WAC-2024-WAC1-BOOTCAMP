<?php
function helix_post_finder() {
    if ($_POST != NULL) {
        return $_POST["phelix"] ?? NULL;
    }
    else {
        return NULL;
    }

}
?>