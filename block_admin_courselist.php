<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * main block class file
 *
 * @package    block_admin_courselist
 * @copyright  2022 munem
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
class block_admin_courselist extends block_base
{

    function init()
    {
        $this->title = get_string('showcourses', 'block_admin_courselist');
    }


    function has_config()
    {
        return true;
    }

    function get_content()
    {
        if ($this->content !== NULL) {
            return $this->content;
        }

        global $DB, $CFG;

        $this->content = new stdClass;
        $this->content->text = '';

        $courses = $DB->get_records('course');
        array_shift($courses);
        foreach ($courses as $course) {
            $editurl = $CFG->wwwroot . '?cid=' . $course->id;
            $this->content->text .= $course->fullname .
                '<button type="button" style="float: right;" onclick="location.href=\'' . $editurl . '\'">Check!</button>'
                . '<br>' . '<br>';
        }

        $this->content->footer = "End of course list";

        return $this->content;
    }

    /**
     * 
     * Allow the block to have multiple instance
     * 
     * @return bool
     */
    function instance_allow_multiple()
    {
        return false;
    }
}
