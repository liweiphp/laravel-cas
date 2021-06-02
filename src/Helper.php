<?php
/***********************************
 * Author: lw
 * Date: 21.06.01
 * Licence: MIT
 ***********************************/

if ( ! function_exists('cas')) {
    /**
     * Initiate CAS hook.
     *
     * @return \Sentrasoft\Cas\CasManager
     */
    function cas()
    {
        return app('cas');
    }
}

if (! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->configPath($path);
    }
}
