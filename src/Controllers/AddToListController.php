<?php

namespace App\Controllers;

use App\Models\ListItemModel;
use App\Services\AddItemService;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddToListController
{
//private AddItemService $addItemService;
private ListItemModel $listItemModel;
    public function __construct(ListItemModel $listItemModel, PhpRenderer $renderer)
    {
        $this->listItemModel = $listItemModel;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        $data = $request->getParsedBody();

        $this->listItemModel->addNewItem($data['newlistitem']);
        return $response
            ->withStatus(302)
            ->withHeader('Location', '/');
    }
}