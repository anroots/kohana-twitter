<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends ORM
{

    /**
     * Get all or a single post
     * @param null|int $id Post ID or empty
     * @param bool $only_mine If true, limits posts to the current user's
     * @return Database_Result|ORM
     */
    public function get($id = NULL, $only_mine = TRUE) {

        $q = $this;

        if ($only_mine) {
            $q->where('user_id', '=', Auth::instance()->get_user()->id);
        }
        if ($id) {
            return $q->where('id', '=', $id)
                    ->find();
        }
        return $q->find_all();
    }


    /**
     * Save a new post
     * @param string $content Post content, max 140 chars
     * @return int Post ID
     */
    public function post($content) {
        $this->post = $content;
        $this->user_id = Auth::instance()->get_user()->id;
        $this->save();
        return $this->id;
    }
}