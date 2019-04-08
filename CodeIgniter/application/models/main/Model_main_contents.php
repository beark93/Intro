<?php

class Model_main_contents extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_contents() {
      $data = array(
        '1' => $this->get_contents1(),
        '2' => $this->get_contents2(),
        '3' => $this->get_contents3(),
        '4' => $this->get_contents4()
      );

      return $data;
    }

    function get_contents1() {
      $data = 'contents1';

      return $data;
    }

    function get_contents2() {
      $data = 'contents2';

      return $data;
    }

    function get_contents3() {
      $data = 'contents3';

      return $data;
    }

    function get_contents4() {
      $data = 'contents4';

      return $data;
    }

}
