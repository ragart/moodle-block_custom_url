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
 * Block definition.
 *
 * @package   block_custom_url
 * @copyright 2024 Salvador Banderas Rovira <info@salvadorbanderas.eu>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use core_reportbuilder\external\columns\sort\get;

defined('MOODLE_INTERNAL') || die();

/**
 * Block definition.
 *
 * @copyright 2024 Salvador Banderas Rovira <info@salvadorbanderas.eu>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_custom_url extends block_base {

    /**
     * Initialize the block.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_custom_url');
    }

    /**
     * Specialization
     */
    public function specialization() {
        $this->title = '';
    }

    /**
     * Allow the block to have a configuration page
     *
     * @return boolean
     */
    public function has_config() {
        return true;
    }

    /**
     * Allow multiple instances of the block
     *
     * @return boolean
     */
    public function instance_allow_multiple() {
        return true;
    }

    /**
     * Specifies where the block can be used.
     *
     * @return array
     */
    public function applicable_formats() {
        return ['course' => true, 'mod' => true];
    }

    /**
     * Get the block content.
     *
     * @return stdClass
     */
    public function get_content() {
        global $OUTPUT;
        if ($this->content !== null) {
            return $this->content;
        }
        $url = $this->config->url ?? get_config('block_custom_url', 'url');
        $name = $this->config->name ?? get_config('block_custom_url', 'name');
        $this->content = new stdClass();
        $this->content->text = $OUTPUT->render_from_template('block_custom_url/block', [
            'url' => $url,
            'name' => $name
        ]);
        return $this->content;
    }
}
