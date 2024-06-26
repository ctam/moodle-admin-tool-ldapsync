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
 * testsettings.php
 *
 * @package     tool_ldapsync
 * @author      Carson Tam <carson.tam@ucsf.edu>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright   Copyright (c) 2024, UCSF Education IT
 *
 */

require_once('../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

admin_externalpage_setup('ldapsync_testsettings');

$return = $CFG->wwwroot . '/' . $CFG->admin . '/settings.php?section=ldapsync_settings';

echo $OUTPUT->header();

$sync = new \tool_ldapsync\importer();
$sync->test_settings();

echo $OUTPUT->continue_button($return);
echo $OUTPUT->footer();
