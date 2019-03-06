<?php

namespace Mico\Init;

interface InitInterface
{
    /**
     * Add new process to init
     * @param callable $process
     * @param $priority 0-1, A-Z characters
     * @return InitInterface
     */
    public function add(callable $process, $priority): InitInterface;

    /**
     * Cancel the process from init before it starts
     * @param ProcessInterface $process
     * @return mixed
     */
    public function cancel(ProcessInterface $process);

    /**
     * Run init
     * @return mixed
     */
    public function run();
}