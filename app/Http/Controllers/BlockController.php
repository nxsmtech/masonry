<?php

namespace App\Http\Controllers;

use App\Block;
use App\Helpers\ColorHelper;
use Illuminate\Http\Request;
use App\Repositories\BlocksRepository;

class BlockController extends Controller
{
    /*
     * @var BlocksRepository
     */
    private $repository;
    /*
    * @var ColorHelper
    */
    private $color;

    public function __construct(BlocksRepository $repository, ColorHelper $color)
    {
        $this->repository = $repository;
        $this->color = $color;
    }
    public function index()
    {
        $result = $this->repository->blocks(30);
        $blocks = $this->color->color($result);
        return view('blocks.index', compact('blocks'));
    }
}
