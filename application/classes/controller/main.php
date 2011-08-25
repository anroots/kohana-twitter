<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{

    public $template = 'template';

    public function before() {
        parent::before();

        if (!Auth::instance()->logged_in()) {
            $this->request->redirect('auth/login');
        }
        // Use default view as controller/view
        // So controller dash action index will have the view application/views/dash/index
        $view = $this->request->controller() . '/' . $this->request->action();
        $this->template->content = file_exists(APPPATH . 'views/' . $view . '.php') ? View::factory($view) : NULL;

        $this->template->title = 'Kohana Twitter';

    }


}
