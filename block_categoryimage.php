<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   block_categoryimage
 * @copyright 1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


class block_categoryimage extends block_base
{

    public function init()
    {
        $this->title = get_string('categoryimage', 'block_categoryimage');
    }

    function get_content()
    {
        global $DB, $CFG, $PAGE;

        if ($this->content !== NULL) {
            return $this->content;
        }

        if ($CFG->forcelogin) {
            require_login();
        }

        //$courserenderer = $PAGE->get_renderer('core', 'course');

        //$content = $courserenderer->course_category(11);

        $content = "
        <p><img src='http://localhost/draftfile.php/5/user/draft/316790427/learn.italian.language1_Hero.jpg' alt='' class='img-responsive atto_image_button_text-bottom' width='935' height='510'></p>
        <p><img src='http://localhost/draftfile.php/5/user/draft/370939109/curso_espanhol.jpg' alt='' class='img-responsive atto_image_button_text-bottom' width='600' height='428'></p>";

        $this->content = new stdClass;
        $this->content->text = $content;

        $this->content->footer = 'Este é o rodapé';

        return $this->content;
    }

}
