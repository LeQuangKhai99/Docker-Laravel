<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Job\JobRepositoryInterface;

class JobController extends Controller
{
    protected $jobRepository;

    public function __construct(JobRepositoryInterface $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }
    
    public function index()
    {
        $jobs = $this->jobRepository->getAll();
        return response()->json($jobs);
    }
}
