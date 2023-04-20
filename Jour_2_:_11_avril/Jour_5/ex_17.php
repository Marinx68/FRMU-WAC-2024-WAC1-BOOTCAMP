<?php
function check_url($whiteList) {
    if (isset($_GET["token"])) {
        $split = str_split($_GET["token"]);
        $length = strlen($_GET["token"]);

        foreach ($split as $tokenValue) {
            print "--tokenValue char: " . $tokenValue;
            foreach ($whiteList as $listChar) {
                print " compared to listChar char: " . $listChar . PHP_EOL;
                if ($tokenValue == $listChar) {
                    print " -- matches" . PHP_EOL;
                    $length--;
                }
            }
        }
        
        if ($length == 0) {
            print "!!check successful" . PHP_EOL;
            return 1;
        } else {
            print "!!check failed" . PHP_EOL;
            return -1;
        }
    } else {
        print "token doesn't exist";
        return false;
    }
}