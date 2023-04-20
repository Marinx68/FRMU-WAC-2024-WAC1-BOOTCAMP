<?php
function check_email() {
    if (isset($_POST)) {
        if ($_POST["email"] != null) {
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo "courriel invalide\n";
            }
            else echo "courriel valide\n";
        }
        else return null;
    }
    else return null;
}

?>