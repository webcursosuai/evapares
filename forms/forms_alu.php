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
 * @package mod
 * @subpackage emarking
 * @copyright Hans Jeria (hansjeria@gmail.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once(dirname(dirname(dirname(dirname(__FILE__))))."/config.php");
require_once ($CFG->libdir . "/formslib.php");

class evapares_evalu_usua extends moodleform {
	
		function definition() {
	
			 		global $DB;
			 		echo 'pasaporaqui';
			 		//aki
			 		if(!$currenttab){
			 			$currenttab=1;
			 		}
			 		$tbz = array();
			 		$tabz=array();
			 		$inactive = array();
			 		$activated = array();
			 		$inactive = array('edit');
			 		$activated = array('edit');
			 		$tbz[] = new tabobject('tb1',$CFG->wwwroot.'/mod/evapares/evaluations_tab.php', 'estocambiaenlang');
			 		$tbz[] = new tabobject('tb2',$CFG->wwwroot.'/mod/evapares/results_tab.php','estocambiaenlang');
			 		$tabz=tbz;
			 		print_tabs($tabz,$currenttab,$inactive, $activated);
			 		
		}
	}
	