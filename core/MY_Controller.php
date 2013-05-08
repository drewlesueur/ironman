<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

        protected $activeItem;
        protected $ctrl;
    
        function __construct() {
            parent::__construct();

            //used for hilighting current menu item
            preg_match('/(?P<name>\w+)\/(?P<ctrl>\w+)/', $_SERVER['REQUEST_URI'], $matches);
            $this->activeMenuItem = "class='active'";
            $this->ctrl = isset($matches['ctrl'])? $matches['ctrl'] : '';

        }
        
}
