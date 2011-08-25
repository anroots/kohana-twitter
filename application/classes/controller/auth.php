<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Handles login/logout.
 * Notice that this is the only controller not extending Controller_Main
 * since this is the only page not requiring being logged in
 */
class Controller_Auth extends Controller_Template
{

    public $template = 'template'; // Use the default template

    /**
     * Shows the login page and handles login
     * @return void
     */
    public function action_login() {

        // Logged in users should not see this page
        if (Auth::instance()->logged_in()) {
            $this->request->redirect('');
        }

        // If the login form was posted...
        $post = $this->request->post();
        if (isset($post['login'])) {

            // Try to login
            if (Auth::instance()->login($post['username'], $post['password'])) {
                $this->request->redirect('');
            } else {
                Notify::msg('Aww, you missed!', 'error');
            }
        }


        $this->template->content = View::factory('auth/login');
        $this->template->title = 'Login to access the Warp Zone';

    }


    /**
     * Log the user out
     * @return void
     */
    public function action_logout() {
        Auth::instance()->logout();
        $this->request->redirect('auth/login');
    }

}
