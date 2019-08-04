<?php

namespace App\Http\Controllers;

use App\Block;
use Illuminate\Http\Request;
use App\Repositories\BlocksRepository;

class BlockController extends Controller
{
    /*
     * @var BlocksRepository
     */
    private $repository;

    public function __construct(BlocksRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $blocks = $this->repository->blocks(30);
        return view('blocks.index', compact('blocks'));
    }
}
