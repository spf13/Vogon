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
 * @author Steve Francia <smarty@spf13.com>
 * @version  1
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 * @return string|null
 */


function smarty_function_slimurl($params, $template)
{
    $s = Slim::getInstance();
    $name   = (empty($params['name'])) ? 'default' : $params['name'];
    $values = (empty($params['values'])) ? array() : $params['values'];
    $key = (empty($params['key'])) ? "" : $params['key'];
    $val = (empty($params['val'])) ? "" : $params['val'];

    $stringify = function ($values) {
        foreach ($values as $key=>$value) {
            $values[$key] = (string) $value;
        }
        return $values;
    };

    if (!empty($key) && !empty($val)) {
        $values = array($key => $val);
    }

    try  {
        $url = $s->urlFor($name, $stringify($values));
    } catch (Exception $e) {
        $url = "";
    }

    return $url;
}

?>
