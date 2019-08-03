<?php

namespace App\Http\Controllers;

use App\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        $blocks = Block::orderBy('created_at')->orderBy('rand_num')->take(30)->get();
        return view('blocks.index', compact('blocks'));
    }
}
