<?php
/**
 * Created by IntelliJ IDEA.
 * User: abhijeet.pa
 * Date: 17/01/16
 * Time: 3:02 PM
 */
namespace Codechef;

use Slim\Http\Response;

class JSONResponse extends Response{
    public function __construct($status = 200, HeadersInterface $headers = null, StreamInterface $body = null){
        parent::__construct($status, $headers, $body);
        $this->withHeader('Content-type', 'application/json');
    }
}