<?php

namespace App\Repositories;

use App\Block;

class BlocksRepository
{
    public function blocks($amount)
    {
        $blocks = Block::orderBy('rand_num', 'asc')->orderBy('created_at', 'asc')->paginate($amount);
        return $blocks;
    }
}