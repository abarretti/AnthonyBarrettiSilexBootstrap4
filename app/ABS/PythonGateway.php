<?php
namespace ABS;

class PythonGateway {

  private $url = 'http://127.0.0.1:8080/';
  // private $url = 'http://anthonybarretti.com:8080';
  private $data = ['key' => 'DarthSkywalker456'];

  public function run() {
    $options = [
      'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($this->data)
      ]
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($this->url, false, $context);
    if ($result === FALSE) {
      return 'Error Response from Slithering Elephant';
    }
    return $result;
  }
}
