<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dash extends Controller_Main
{


    public function action_index() {

        $post = $this->request->post();
        $p = ORM::factory('post');

        if (!empty($post)) {

            try {

                $p->post($post['post']);
                $this->request->redirect('dash/');

            } catch (ORM_Validation_Exception $e) {
                Notify::msg('Aww, something went horribly, <strong>horribly</strong> wrong!', 'error');
            }
        }

        $this->template->title = 'Dashboard';
        $this->template->content->posts = $p->get(NULL, TRUE);
        
    }



} 
