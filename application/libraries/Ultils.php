<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ultils
{
    public function toJson($data)
    {
        header('Content-Type: application/json');
        return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public function clearString($string)
    {
        return str_replace("'", '', $string);
    }
}
