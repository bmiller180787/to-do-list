<?php
declare(strict_types=1);

use App\Controllers\AddToListController;
use App\Controllers\MarkAsCompleteController;
use App\Controllers\ToDoListController;
use Slim\App;

return function (App $app) {

    $app->get('/', ToDoListController::class);
    $app->get('/todolist', ToDoListController::class);
    $app->post('/addtolist', AddToListController::class);
    $app->post('/markasdone', MarkAsCompleteController::class);
};