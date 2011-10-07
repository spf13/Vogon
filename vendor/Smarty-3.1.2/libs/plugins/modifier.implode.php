<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty implode modifier plugin
 *
 * Type:     modifier<br>
 * Name:     implode<br>
 * Purpose:  add spaces between elements in an array
 *
 * @author Steve Francia <smarty@spf13.com>
 * @param string $string       input array
 * @param string $spacify_char string to insert between elements.
 * @return string
 */
function smarty_modifier_implode($array, $spacify_char = ', ')
{
    if ($array && is_array($array)) {
        return implode($spacify_char, $array);
    }
}

?>
