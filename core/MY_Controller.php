<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

        protected $activeItem;
        protected $ctrl;
    
        function __construct() {

            parent::__construct();

            preg_match('/(?P<name>\w+)\/(?P<ctrl>\w+)/', $_SERVER['REQUEST_URI'], $matches);
            //used for highlighting current menu item in header
            $this->activeMenuItem = "class='active'";
            //capture current controller. Used to fetch controller name, highlight menu items, generate links, etc etc 
            $this->ctrl = isset($matches['ctrl'])? $matches['ctrl'] : '';

        }
        
}
