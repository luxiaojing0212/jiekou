<?php
// ● 用户请求授权操作，服务端完成授权，生成token并保存
// ● 客户端接收服务器返回的token，并保存
// ● 客户端请求服务器时，携带token参数
// ● 服务器验证客户端的token是否有效
// $uid = '1234';
// $user_name = 'luhan';
// $token1 = sha1($uid.$user_name.mt_rand(1,99999).time());
// $token2 = strrev($stoken1);
// $response = [
//     'errno'=>'9294',
//     'msg'=>'ok',
//     'data'=>[
//         'token'=>$token2
//     ]
// ];
?>