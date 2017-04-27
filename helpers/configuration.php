<?php

if (!function_exists('config')) {
    function config(string $item = null, $default = null) {
        $data = require __DIR__.'/../phinx.php';

        if ($item === null) {
            return $data;
        }

        $item = explode('.', $item);
        $result = $data[$item[0]] ?? $default;

        for ($i = 1; $i <=count($item); $i++) {
            if (isset($item[$i]) and isset($result[$item[$i]])) {
                $result = $result[$item[$i]] ?? $default;
            }
        }

        return $result;
    }
}
