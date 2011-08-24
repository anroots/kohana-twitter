<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dash extends Controller_Main
{


    public function action_index() {

        $p = $this->request->post();

        if (isset($p['upload'])) {
            $d = ORM::factory('design');

            try {

                $hash = $d->upload($p);
                $this->request->redirect('dash/view/' . $hash);

            } catch (ORM_Validation_Exception $e) {
                Notify::msg('Aww, something went horribly, <strong>horribly</strong> wrong!', 'error');
            }
        }
    }


    public function action_view() {
        $hash = $this->request->param('id');

        $d = ORM::factory('design');
        $id = $d->hash($hash);
        $d = ORM::factory('design', $id);
        if (!$d->loaded()) {
            Notify::msg('Aww, the design you were looking for wasn\'t found!', 'error');
            $this->request->redirect();
        }

        // If state is start, the timer runs
        $state = $this->request->param('state');

        if (!empty($state)) {
            $this->template->content = View::factory('dash/look', array('design' => $d));
        } else {
            $this->template->content = View::factory('dash/view', array('design' => $d));
        }
    }

} 
