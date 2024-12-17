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
 * Block edit form.
 *
 * @package   block_custom_url
 * @copyright 2024 Salvador Banderas Rovira <info@salvadorbanderas.eu>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_custom_url_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        $mform->addElement('text', 'config_url', get_string('config:url', 'block_custom_url'));
        $mform->setDefault('config_url', get_config('block_custom_url', 'url'));
        $mform->setType('config_url', PARAM_URL);
        $mform->addElement('text', 'config_name', get_string('config:name', 'block_custom_url'));
        $mform->setDefault('config_name', get_config('block_custom_url', 'name'));
        $mform->setType('config_name', PARAM_TEXT);
    }
}