<?php
namespace App\Repositories\Job;

use App\Repositories\EloquentRepository;
class JobRepository extends EloquentRepository implements JobRepositoryInterface 
{
    public function getModel()
    {
        return \App\Models\Job::class;
    }

    public function getTopJob(){
       return 'aa';
    }
}