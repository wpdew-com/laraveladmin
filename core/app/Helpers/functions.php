<?php



if (! function_exists('esc_html')) {
    function esc_html($string){
        $return = htmlspecialchars ($string, ENT_QUOTES);
        return $return;
    }

}


// Path to the project's root folder
//echo base_path();

// Path to the 'app' folder
//echo app_path();

// Path to the 'public' folder
//echo public_path();

// Path to the 'storage' folder
//echo storage_path();

// Path to the 'storage/app' folder
//echo storage_path('app');

if (! function_exists('get_home_url')) {
    function get_home_url(){
        $return = env('APP_URL');
        return $return;
    }

}

if (! function_exists('get_template_directory')) {
    function get_template_directory($template){
        $return = public_path().'\theme\\'.$template.'\\';
        return $return;
    }

}


if (! function_exists('get_template_directory_uri')) {
    function get_template_directory_uri($template){
        $return = env('APP_URL').'core/public/theme/'.$template.'/';
        return $return;
    }

}
