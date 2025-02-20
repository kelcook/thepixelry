<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * p_format()
 *
 * a function to convert a variable to the "p" format for displaying inside
 * of a p without it being the only thing in the p
 *
 */
function p_format($d) {
    if (is_array($d)) {
        return print_r($d, TRUE);
    } else if (is_bool($d)) {
        if ($d) {
            return "Boolean: True";
        } else {
            return "Boolean: False";
        }
    } else if(is_object($d)) {
        return print_r($d, TRUE);
    } else {
        return $d;
    }
}

/**
 * p()
 *
 * alias for pr
 *
 */
function p($v,$w=false,$x=false,$color=false,$bgcolor=false)
{
    $v = p_format($v);

    $count = substr_count($v, "\n");

    if(!$w) {
        $w = 1170;
    }
    if(!$x) {
        $x = min(30 + $count * 16, 350);
    }
    if(!$color) {
        $color = 'white';
    }
    if(!$bgcolor) {
        $bgcolor = 'black';
    }


    // Get Instance
    // $CI =& get_instance();

    echo "<p>";
    print "<textarea style='width:".$w."px!important; height:".$x."px!important; background-color: ".$bgcolor."; color: ".$color."; border: 0; padding: 6px;'>";
    print $v;
    print "</textarea>";
    echo "</p>";
}