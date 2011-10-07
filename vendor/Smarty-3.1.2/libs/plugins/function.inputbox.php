<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {cycle} function plugin
 *
 * Type:     function<br>
 * Name:     slimurl<br>
 * Date:     Oct 5, 2011<br>
 * Purpose:  expose slim url function to smarty<br>
 * Params:
 * <pre>
 * - name      - name of url
 * - values    - array of values for url params
 * </pre>
 * Examples:<br>
 * <pre>
 * {slimurl name=home}
 * {slimurl name=home values=array()}
 * </pre>
 *
 * @link http://www.smarty.net/manual/en/language.function.cycle.php {cycle}
 *       (Smarty online manual)
 * @author Steve Francia <slimurl@spf13.com>
 * @version  1
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 * @return string|null
 */

function smarty_function_inputbox($params, $template)
{

    $hint  = (empty($params['hint'])) ? '' : $params['hint'];
    $name   = (empty($params['name'])) ? 'default' : $params['name'];
    $label   = (empty($params['label'])) ? ucfirst($name) : $params['label'];
    $value = (empty($params['value'])) ? null : $params['value'];
    $type = (empty($params['type'])) ? 'text' : $params['type'];

$output = <<<EOT
        <label for="$name">$label
            <span class="small">$hint</span>
        </label>
            <input type="$type" value="$value" name="$name">
        <div style="clear:both">&nbsp;</div>
EOT;

    return $output;
}

