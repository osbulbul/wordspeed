<?php

class Navigation
{
    public static function go($vars)
    {
        extract($vars);

        echo json_encode([
            'redirect',
            $url
        ]);
    }
}
