<?php

namespace App\Controllers;

use App\Models\ListItemModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class ToDoListController
{
private ListItemModel $listModel;
private PhpRenderer $renderer;

    public function __construct(ListItemModel $listModel, PhpRenderer $renderer)
    {
        $this->listModel = $listModel;
        $this->renderer = $renderer;
    }

public function __invoke(RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
{
$listItems = $this->listModel->getListItems();
return $this->renderer->render($response, 'todolist.php', ['listItems' => $listItems]);
}
}