<?php

namespace App\Controllers;

use App\Models\ListItemModel;
use Slim\Views\PhpRenderer;

class AddToListController
{
private ListItemModel $listModel;
private PhpRenderer $renderer;

    public function __construct(ListItemModel $listModel, PhpRenderer $renderer)
    {
        $this->listModel = $listModel;
        $this->renderer = $renderer;
    }



}