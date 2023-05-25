<?php

namespace App\Entities;

class ListItem
{
private int $id;
private string $listItem;
private string $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getListItem(): string
    {
        return $this->listItem;
    }

    public function setListItem(string $listItem): void
    {
        $this->listItem = $listItem;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

}