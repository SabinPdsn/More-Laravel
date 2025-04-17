<?php

namespace App\Util;

class ResponseUtil {
public function sendResponse($message, $results){

    return [
        "message"=>$message,
        "results"=>$results,
    ];

    }
}
