<?php

namespace App\Services;

use App\Models\ListItemModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddItemService
{
    private ListItemModel $listItemModel;

    public function __construct(ListItemModel $listItemModel)
    {
        $this->listItemModel = $listItemModel;
    }

//    public function addNewItemService(ListItemModel $listItemModel, array $args): bool
//    {
//        $data = $args['name'];
//        return $this->addNewItem($data);
//    }
}