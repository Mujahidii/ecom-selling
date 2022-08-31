<?php

namespace App\HelperModules;

use Illuminate\Http\Response;

class HelperModule
{
    /**
     * @param null $data
     * @param null $message
     * @param null $status
     * @return Response
     */
    static function jsonResponse($data = null, $message = null, $status = null): Response
    {
        return response([
            'data' => $data,
            'message' => $message,
            'status' => $status
        ]);
    }
}
