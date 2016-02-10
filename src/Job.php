<?php

class Job {
    private $job;

    function __construct($new_job)
    {
        $this->job = $new_job;
    }

    function setJob($new_job)
    {
        $this->job = $new_job;
    }

    function getJob()
    {
        return $this->job;
    }
}




 ?>
