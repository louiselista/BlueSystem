<?php

class Util {
    static function string_format() {
        $args = func_get_args();
        if (count($args) == 0) {
            return;
        }
        if (count($args) == 1) {
            return $args[0];
        }
        $str = array_shift($args);
        $str = preg_replace_callback('/\\{(0|[1-9]\\d*)\\}/', create_function('$match', '$args = '.var_export($args, true).'; return isset($args[$match[1]]) ? $args[$match[1]] : $match[0];'), $str);
        return $str;
    }
    static function to_object($array) {
        if (!is_array($array)) {
            return $array;
        }

        $object = new stdClass();
        if (is_array($array) && count($array) > 0) {
            foreach ($array as $name=>$value) {
                $name = strtolower(trim($name));
                if (isset($name)) {
                    $object->$name = Utilitario::to_object($value);
                }
            }
            return $object;
        }
        else {
            return FALSE;
        }
    }
    static function call_API($method, $url, $data = false){
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data != false)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                if ($data != false)
                    curl_setopt($curl, CURLOPT_PUT, $data);
                break;
            case "GET":
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                if ($data != false)
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $data);
                break;
            case "PATCH":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
                curl_setopt($curl, CURLOPT_POSTFIELDS,$data);
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                if ($data != false)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");

        curl_setopt($curl, CURLOPT_URL, Settings::WEB_SERVICES_URL.$url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data))                                                                       
        );  
        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}