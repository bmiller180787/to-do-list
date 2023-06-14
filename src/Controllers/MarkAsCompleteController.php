<?php

namespace App\Controllers;

use App\Models\ListItemModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class MarkAsCompleteController
{
    private ListItemModel $listItemModel;

    public function __construct(ListItemModel $listItemModel, PhpRenderer $renderer)
    {
        $this->listItemModel = $listItemModel;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        $data = $request->getParsedBody();
        $this->listItemModel->markAsComplete($data['markAsDone']);
        return $response
//            ->withRedirect('/', 302);
            ->withHeader('Location', '/')
            ->withStatus(302);
    }
}