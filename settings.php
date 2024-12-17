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
 * Settings.
 *
 * @package   block_custom_url
 * @copyright 2024 Salvador Banderas Rovira <info@salvadorbanderas.eu>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Set the URL
    $setting = new admin_setting_configtext(
        'block_custom_url/url',
        get_string('config:url', 'block_custom_url'),
        get_string('config:url_desc', 'block_custom_url'),
        '',
        PARAM_URL
    );
    $settings->add($setting);

    // Set the name
    $setting = new admin_setting_configtext(
        'block_custom_url/name',
        get_string('config:name', 'block_custom_url'),
        get_string('config:name_desc', 'block_custom_url'),
        '',
        PARAM_TEXT
    );
    $settings->add($setting);

}
