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
