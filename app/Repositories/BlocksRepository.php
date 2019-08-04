<?php

namespace App\Repositories;

use App\Block;

class BlocksRepository
{
    public function blocks($amount)
    {
        $blocks = Block::orderBy('created_at')->orderBy('rand_num')->paginate($amount);

        foreach ($blocks as $block) {
            if (empty($block->color)) {
                $block->color = $block->setRandomColor();
                $block->save();
            }
        }

        return $blocks;
    }
}