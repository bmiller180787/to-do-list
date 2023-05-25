<?php

namespace App\Models;

use App\Entities\ListItem;
use PDO;

class ListItemModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getListItems(): array
    {
        $sql = 'SELECT `id`, `listitem`, `status`
            FROM `todo-list`;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ListItem::class);
        $query->execute();
        return $query->fetchAll();
    }
}
