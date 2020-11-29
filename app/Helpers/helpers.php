<?php

if (!function_exists('json')){
    /**
     * @param int $code code码
     * @param string $message 提示
     * @param null|array $data 数据
     * @param null|array $attachData 附加数据
     * @param int $statusCode 状态码
     * @param array $headers
     * @param int $options 常量  （JSON_UNESCAPED_SLASHES JSON_PRETTY_PRINT JSON_NUMERIC_CHECK）
     * @return \Illuminate\Http\JsonResponse
     */
    function json(int $code, string $message, $data=null, $attachData=null, $statusCode=200,array $headers = [],$options=0){
        $result = [
            'code' => $code,
        ];
        if (!$data) {
            $result['data'] = [];
        }else{
            $result['data'] = $data;
        }
        $result['msg'] = $message;
        if ($attachData) {
            $result = array_merge($result,$attachData);
        }
        return response()->json($result,$statusCode,$headers,$options);
    }
}


