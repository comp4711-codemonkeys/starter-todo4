<?php

/**
 * Tasks model.
 */
class Tasks extends CSV_Model
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/tasks.csv', 'id');
    }
}