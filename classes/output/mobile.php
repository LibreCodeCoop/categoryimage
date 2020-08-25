<?php
namespace block_categoryimage\output;
 
defined('MOODLE_INTERNAL') || die();
 
use context_module;
use block_categoryimage_external;
 
/**
 * Mobile output class for categoryimage
 *
 * @package    block_categoryimage
 * @copyright  2020 Lívia Gouvêa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mobile
{
    /**
     * Returns the categoryimage course view for the mobile app.
     * @param  array $args Arguments from tool_mobile_get_content WS
     *
     * @return array       HTML, javascript and otherdata
     */
    public static function mobile_categoryimage_view($args)
    {
        global $OUTPUT, $USER, $DB;
 
        $args = (object) $args;
 
        // Capabilities check.
        //require_login($args->courseid , false , $cm, true, true);
 
        $categories = $DB->get_records('course_categories');
 
        //$categoryimage->name = format_string($categoryimage->name);
        //list($categoryimage->intro, $categoryimage->introformat) = external_format_text($categoryimage->intro, $categoryimage->introformat, $context->id,'block_categoryimage', 'intro');
        $data = array(
            'categories' => $categories
        );
 
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('block_categoryimage/mobile_view_page', $data),
                ],
            ],
            'javascript' => '',
            //'otherdata' => array('field' => 'category', 'value' => 11),
            //'otherdata' => array('criteria' => 11, 'addsubcategories' => 1),
            'otherdata' => array('courseid' => 11),
        ];
    }

    public static function mobile_get_child_categories($args)
    {
        global $OUTPUT, $USER, $DB;
 
        $args = (object) $args;
 
        // Capabilities check.
        //require_login($args->courseid , false , $cm, true, true);
 
        //$categories = $DB->get_records('course_categories');
 
        //$categoryimage->name = format_string($categoryimage->name);
        //list($categoryimage->intro, $categoryimage->introformat) = external_format_text($categoryimage->intro, $categoryimage->introformat, $context->id,'block_categoryimage', 'intro');
        $data = array(
            'categories' => $args
        );
 
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('block_categoryimage/mobile_categories_page', $data),
                ],
            ],
            'javascript' => '',
            'otherdata' => '',
        ];

        
    }   

    public static function mobile_get_courses_by_category($args)
    {
        global $OUTPUT, $USER, $DB;
 
        $args = (object) $args;
 
        $data = array(
            'categories' => $args
        );
 
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('block_categoryimage/mobile_course_list_page', $data),
                ],
            ],
            'javascript' => '',
            'otherdata' => '',
        ];

        
    }     
    
    public static function mobile_get_course_by_id($args)
    {
        global $OUTPUT, $USER, $DB;
 
        $args = (object) $args;
 
        $data = array(
            'categories' => $args
        );
 
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('block_categoryimage/mobile_course_page', $data),
                ],
            ],
            'javascript' => '',
            'otherdata' => '',
        ];

        
    }        
}