<?php

namespace App\Helpers;


class ColorHelper
{
    public function color($blocks)
    {
        foreach ($blocks as $block) {
            if (empty($block->color)) {
                $block->color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                $block->save();
            }
        }
        return $blocks;
    }
}