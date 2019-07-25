<?php
/**
 * Created by PhpStorm.
 * User: n
 * Date: 2019/7/25
 * Time: 4:32 PM
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}