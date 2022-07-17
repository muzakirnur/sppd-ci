<?php if (!defined('BASEPATH')) exit('No Direct Script Allowed');

if (!function_exists('auth')) {
    function auth()
    {
        return session('isLoggedIn');
    }
}
