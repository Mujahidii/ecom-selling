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

    /**
     * @param $request
     * @return array|string|string[]
     */
    static function phoneRemoveSpace($request)
    {
        $pattern = '/\s*/m';
        $replace = '';
        $message = $request->phone;
        $removedLinebaksAndWhitespace = preg_replace($pattern, $replace, $message);
        $firstReplace = str_replace('-', '', $removedLinebaksAndWhitespace);
        $secondReplace = str_replace('(', '', $firstReplace);
        return str_replace(')', '', $secondReplace);
    }
}
