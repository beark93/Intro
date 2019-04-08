<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
	}

	public function index()
	{
        $this->load->model('main/model_main_contents');

        // setting title by sub page
        $data['title'] = array(
          '1' => 'Contents1',
          '2' => 'Contents2',
          '3' => 'Contents3',
          '4' => 'Contents4'
        );

        // get contents by sub page
        $contents = $this->model_main_contents->get_contents();

        // get sub page view
        foreach($contents as $idx => $item) {
          $data['sub'][$idx] = $this->load->view('main/sub/sub' . $idx, array('contents' => $item), true);
        }

        // load main view
        $this->load->view('main/view',$data);
	}
}
