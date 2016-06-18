<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package	CodeIgniter
 * @author	leohu <alpha1130@gmail.com>
 * @since	2016-06-18 22:44
 * @version 1.0.2
 */

/**
 *
 * @property CI_Benchmark               $benchmark
 * @property CI_Cache                   $cache
 * @property CI_Calendar                $calendar
 * @property CI_Cart                    $cart
 * @property CI_Config                  $config
 * @property CI_Email                   $email
 * @property CI_Encrypt                 $encrypt
 * @property CI_Exceptions              $exceptions
 * @property CI_Upload                  $upload
 * @property CI_Form_validation         $form_validation
 * @property CI_Ftp                     $ftp
 * @property CI_Image_lib               $image_lib
 * @property CI_Input                   $input
 * @property CI_Javascript              $javascript
 * @property CI_Lang                    $lang
 * @property CI_Loader                  $load
 * @property CI_Migration               $migration
 * @property CI_Output                  $output
 * @property CI_Pagination              $pagination
 * @property CI_Parser                  $parser
 * @property CI_Security                $security
 * @property CI_Session                 $session
 * @property CI_Table                   $table
 * @property CI_Trackback               $trackback
 * @property CI_Typography              $typography
 * @property CI_Unit_test               $unit_test
 * @property CI_URI                     $uri
 * @property CI_User_agent              $user_agent
 * @property CI_Xmlrpc                  $xmlrpc
 * @property CI_Xmlrpcs                 $xmlrpcs
 * @property CI_Zip                     $zip
 * @property CI_DB_query_builder        $db
 */
class bde1c5b421 {}
class CI_Controller extends bde1c5b421 {public function __construct(){}}
class CI_Model extends bde1c5b421 {public function __construct(){}}

// ci predefine constants
/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

