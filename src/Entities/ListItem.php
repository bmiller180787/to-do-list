<?php

namespace App\Entities;

class ListItem
{
    private int $id;
    private string $listitem;
    private int $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getListitem(): string
    {
        return $this->listitem;
    }

    public function setListitem(string $listItem): void
    {
        $this->listitem = $listItem;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

}
