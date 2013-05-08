<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Armor extends MY_Controller {

        function __construct() {
            parent::__construct();

            $this->load->model('armor_model','armor',true);
            
        }
    
	function index() {
                
                $armorList = $this->armor->getAll();

                $this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
                $this->load->view('item_list',array('itemList'=>$armorList,'mod'=>strtolower(get_class($this))));
		$this->load->view('footer');
	}
        
	function details($id) {

                $details = $this->armor->get($id);

                $this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
                $this->load->view('item_details',array('details'=>$details,'mod'=>strtolower(get_class($this))));
		$this->load->view('footer');
	}

        
}