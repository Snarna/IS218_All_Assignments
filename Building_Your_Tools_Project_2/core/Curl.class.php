<?php
class Curl {
  public static function sendHttpRequest($url,$params,$method){
    //Prepare Data
    $data = trimInputData($params);

    //Switch Method
    switch ($method) {
      case 'POST':
        return postRequest($url,$data);
        break;
      case 'GET':
        return getRequest($url,$data);
        break;
      default:
        return "Invalid Method Type!";
        break;
    }
  }

  private function postRequest($url, $data){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    if(curl_errno($ch)){
      throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    return $response;
  }

  private function getRequest($url, $data){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.$data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = curl_exec($ch);
    if(curl_errno($ch)){
      throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    return $response;
  }

  public function trimInputData($params){
    $temp = '';
    //create name value pairs seperated by &
    foreach($params as $k => $v)
    {
       $temp .= $k . '='.$v.'&';
    }
    return rtrim($temp, '&');
  }
}
?>
