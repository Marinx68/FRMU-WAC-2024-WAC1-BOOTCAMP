<?php

    function my_cat_files(...$path){
        $first_file = true;
        $content = "";

        ob_start();

        foreach($path as $file){

            if(file_exists($file)){

                if($first_file){
                    $first_file = false;
                } else {
                    $content .= "_____";
                }

                readfile($file);
                $content .= ob_get_clean();
            }
        }
        ob_end_flush();
        return $content;
    }
?>