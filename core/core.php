<?php



function controller_name($route)
{
    return ucfirst($route).'Controller';
}

function controller_method_name($route)
{
    return 'action'.ucfirst($route);
}


function __autoload($name)
{
    if (file_exists('controller/'.$name.'.php'))
    {
        require_once 'controller/'.$name.'.php';
    }
    else
    {
        if (file_exists('model/'.$name.'.php'))
        {
            require_once 'model/'.$name.'.php';
        }
    }
}