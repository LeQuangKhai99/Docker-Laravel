<?php
namespace App\Repositories\Job;

use App\Repositories\EloquentRepository;
class JobRepository extends EloquentRepository implements JobRepositoryInterface 
{
    public function getModel()
    {
        return \App\Models\Jobs::class;
    }

    public function findbyName($name){
        $job = $this->_model->where('name', $name)->first();
        return $job;
    }
}