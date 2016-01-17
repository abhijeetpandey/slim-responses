<?php
/**
 * Created by IntelliJ IDEA.
 * User: abhijeet.pa
 * Date: 17/01/16
 * Time: 3:02 PM
 */
namespace Codechef;

class JSONAppResponse extends JSONResponse{
    public function write($dump){
        $data = $dump['data'];
        $appStatus = $dump['status'];
        $body = json_encode(array('status'=>$appStatus,'result'=> array('data'=> $data)));
        parent::write($body);
    }
}