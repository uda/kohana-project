<?php defined('SYSPATH') or die('No direct script access.');

class Task_Composer_Install extends Minion_Task
{
    /**
     * TODO: This script should replace the install.php file
     * ./minion composer:install
     * Replaces the install.php file
     *
     * @return null
     */
    protected function _execute(array $params)
    {
        echo 'Installed successfully', "\n";
    }
}

