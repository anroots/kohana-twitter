<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = 'template';

    public function before() {
        parent::before();
        $this->template->content = View::factory('dash/index');
    }

    

}
