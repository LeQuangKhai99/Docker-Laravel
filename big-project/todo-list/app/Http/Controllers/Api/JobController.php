<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Repositories\Job\JobRepositoryInterface;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    protected $jobRepository;
    public function __construct(JobRepositoryinterface $jobRepository){
        $this->jobRepository = $jobRepository;
    }

    public function index(){
        $allJob = $this->jobRepository->getAll();
        return response()->json($allJob, 200);
    }

    public function store(Request $request){
        $mess = array();

        if(!is_null($this->jobRepository->findbyName($request->name))){
            $mess['mess'] = 'name already exist';
        }
        else {

            if(isset($request->name)){
                $job = $this->jobRepository->create([
                    'name' => $request->name
                ]);
                return response()->json($job, 201);
            }
            else {
                $mess['mess'] = 'input name, please';
            }
        }

        return response()->json($mess, 404);
    }
}
