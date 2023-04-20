<?php
function str_beautifuler($str = null) {
    if (!is_string($str)) {
        return null;
    }
    else {
        $strArr = str_split($str);
        $strLen = count($strArr) - 1;
        for ($i = 0; $i <= $strLen; ++$i) {
            if ($strArr[$i] === ' ') {
                $strArr[$i - 1] = strtoupper($strArr[$i - 1]);
            }
            elseif ($i === ($strLen)) {
                $strArr[$i] = strtoupper($strArr[$i]);
            }
            else {
                $strArr[$i] = strtolower($strArr[$i]);
            }
        }
        return implode($strArr);
    }
}
?>