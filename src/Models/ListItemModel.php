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
            FROM `todo-list`
            WHERE `status` = 0;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ListItem::class);
        $query->execute();
        return $query->fetchAll();
    }

    public function markAsComplete(int $id): bool
    {
        $sql = 'UPDATE `todo-list`
            SET `status` = 1
            WHERE `id` = ' . $id . ';';
        $query = $this->db->prepare($sql);
        return $query->execute();
    }

    public function addNewItem(string $listitem): bool
    {
        $sql = "INSERT INTO `todo-list` (`listitem`)
                VALUES (:listitem);";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':listitem', $listitem);
        return $query->execute();
    }
}
