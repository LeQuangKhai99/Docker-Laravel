<?php
namespace App\Repositories\Job;

interface JobRepositoryInterface
{
    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function findByName($name);
}