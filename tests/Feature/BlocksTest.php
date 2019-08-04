<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlocksTest extends TestCase
{
    /** @test */

    use WithFaker, RefreshDatabase;

    public function a_user_can_view_blocks() {
        $block = factory('App\Block')->create();
        $this->get('/')->assertStatus(200);
        $this->get('/')->assertSee($block->color);
    }
}
