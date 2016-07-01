<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01.07.2016
 * Time: 11:40
 */

echo '<ul>';
foreach($comments as $c)
{
    echo '<li>'.$c->name.' : '.$c->comment.'</li>';
}
echo '</ul>';