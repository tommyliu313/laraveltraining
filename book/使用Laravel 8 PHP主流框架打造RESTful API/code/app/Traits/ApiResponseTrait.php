<?php

namespace App\Traits;

trait ApiResponseTrait{

    /**
     * 
     * 
    * @param mixed $message
    * @param mixed $status
    * @param mixed|null $code
    * @return \Illuminate\Http\Response
    */
    public function errorResponse($message, $status, $code = null){
        $code = $code ?? $status;

        return response()->json(
            ['message' => $message, 'code' => $code],
            $status
        );
    }
}