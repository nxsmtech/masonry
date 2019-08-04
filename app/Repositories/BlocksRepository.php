<?php

namespace App\Repositories;

use App\Block;

class BlocksRepository
{
    public function blocks($amount)
    {
        $blocks = Block::orderBy('created_at')->orderBy('rand_num')->paginate($amount);
        return $blocks;
    }
}