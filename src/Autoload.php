<?php

/**
 * Autoload
 *
 * @package		goma/goma-test-core
 *
 * @author		Goma-Team
 * @license		GNU Lesser General Public License, version 3; see "LICENSE.txt"
 */

spl_autoload_register(function($class) {
    if(file_exists(__FILE__ . "/../" . $class . ".php")) {
        require_once (__FILE__ . "/../" . $class . ".php");
    }
});
