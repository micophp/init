<?php

namespace Mico\Init;

interface ProcessInterface
{
    /**
     * Get the init object
     * @return InitInterface
     */
    public function getInit(): InitInterface;

    /**
     * Mark process as done
     * @return mixed
     */
    public function done();
}