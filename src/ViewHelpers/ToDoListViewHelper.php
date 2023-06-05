<?php

namespace App\ViewHelpers;

class ToDoListViewHelper
{
    static function generateList(array $listItems): string
    {
        $output = '';
        foreach ($listItems as $listitem) {
            $output .= '<p>' . $listitem->getListitem() . '</p>';
            $output .= '<button class="button" type="button">Mark as Complete</button>';
        }
        return $output;
    }
}