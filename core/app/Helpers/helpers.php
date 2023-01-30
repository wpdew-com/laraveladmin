<?php



if (! function_exists('getUserIpAddr')) {
    function getUserIpAddr()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}


if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Models\Setting();
        }

        if (is_array($key)) {
            return \App\Models\Setting::set($key[0], $key[1]);
        }

        $value = \App\Models\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

//settingstyles
if (! function_exists('settingstyles')) {

    function settingstyles($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Models\Setting();
        }

        if (is_array($key)) {
            return \App\Models\Setting::set($key[0], $key[1]);
        }

        $value = \App\Models\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

//settingsapi
if (! function_exists('settingsapi')) {

    function settingsapi($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Models\Setting();
        }

        if (is_array($key)) {
            return \App\Models\Setting::set($key[0], $key[1]);
        }

        $value = \App\Models\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}


if (! function_exists('translate')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $file
     * @param  array  $replace
     * @return string|array|null
     */
    function translate($file = null, $replace = [], $locale = null)
    {
        return __($file.'.'.$replace);
    }

    }

if (! function_exists('SendTelegram')) {
    function SendTelegram($botToken, $chatId, $message)
    {
        $botToken = $botToken;
        $chatId = $chatId;
        $message = $message;
        $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&parse_mode=html&text=$message";
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}


