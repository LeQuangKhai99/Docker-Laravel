<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $cateRepository;

    public function __construct(CategoryRepositoryInterface $cateRepository)
    {
        $this->cateRepository = $cateRepository;
    }
    
    public function index()
    {
        $cates = $this->cateRepository->getAll();
        return response()->json($cates);
    }
}
