<?php
function get_authorized_users(string $permission, array $users) {
    foreach ($users as $userPermission) {
        if (in_array($permission, $userPermission["permissions"])) {
            echo $userPermission["login"] . "\n";
        }
    }
}

?>