<?php


class StopWatch
{
    protected $startTime;
    protected $stopTime;


    function getStarttime()
    {
        return $this->startTime;
    }

    function setStarttime($startTime)
    {
        $this->startTime = $startTime;
    }

    function getStoptime()
    {
        return $this->stopTime;
    }

    function setStoptime($stopTime)
    {
        $this->stopTime = $stopTime;
    }

    function start()
    {
        $this->startTime = microtime();
    }

    function stop()
    {
        $this->stopTime = microtime();
    }

    function getElapsedTime()
    {
        return $this->getStoptime() - $this->getStarttime();
    }
}