<?php
namespace ABS;

use ABS\PythonGateway;

class PythonController {

  private $gateway;

  public function __construct(PythonGateway $gateway) {
    $this->gateway = $gateway;
  }

  public function runApp() {
    if (isset($_GET["run"])) {
      return json_decode($this->gateway->run());
    }
  }
}
