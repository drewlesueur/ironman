<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Characters extends MY_Controller {

        function __construct() {
            parent::__construct();

            $this->load->model('character_model','character',true);
            
        }
    
	function index() {
                
                $charList = $this->character->getAll();

                $this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
                $this->load->view('item_list',array('itemList'=>$charList,'mod'=>strtolower(get_class($this))));
		$this->load->view('footer');
	}
        
	function details($id) {
                
                $details = $this->character->get($id);

                $this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
                $this->load->view('item_details',array('details'=>$details,'mod'=>strtolower(get_class($this))));
		$this->load->view('footer');
	}

        
}
