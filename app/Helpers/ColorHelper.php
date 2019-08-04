<?php

namespace App\Helpers;


class ColorHelper
{
    public function color($blocks)
    {
        foreach ($blocks as $block) {
            if (empty($block->color)) {
                $block->color = $block->setColor();
                $block->save();
            }
        }
        return $blocks;
    }
}