<?php

namespace App\ViewHelpers;

class ToDoListViewHelper
{
    static function generateList(array $listItems): string
    {
        $output = '';
        foreach ($listItems as $listitem) {

            $output .= '<div><form action="/markasdone" method="post"><label>' . $listitem->getListitem() . ' : </label>';
            $output .= '<button class="button" name="markAsDone" value="' . $listitem->getId() . '">Mark as Complete</button></form></div>';
        }
        return $output;
    }
}
