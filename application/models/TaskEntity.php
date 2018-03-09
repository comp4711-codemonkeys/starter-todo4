<?php
class TaskEntity extends Entity {
    
    protected $id;
    protected $task;
    protected $priority;
    protected $size;
    protected $group;
    protected $deadline;
    protected $status;
    protected $flag;   
   
    public function setId($value) {
        if (empty($value)) {
            throw new InvalidArgumentException('An Id must have a value');
        }
        if ($value < 0) {
            throw new Exception('Id must be a value greater or equal to 0');
        }
        $this->id = $value;
        return $this;
    }
    
    function setTask($value) {
        if (empty($value)) {
            throw new InvalidArgumentException('A Task cannot be empty');
        }
        if (strlen($value) > 30) {
            throw new Exception('A Task cannot be longer than 30 characters');
        }
        $this->task = $value;
        return $this;
    }
    
    function setPriority($value) {
        if (empty($value)) {
            throw new InvalidArgumentException('A Priorty cannot be empty');
        }
        if ($value < 1 || $value > 3) {
            throw new Exception('A Prioty has to be between 1 and 3');
        }
        $this->priority = $value;
        return $this;
    }
    
    function setSize($value) {
        if (empty($value)) {
            throw new InvalidArgumentException('A Size cannot be empty');
        }
        if ($value < 1 || $value > 3) {
            throw new Exception('A Size has to be between 1 and 3');
        }
        $this->size = $value;
        return $this;
    }
    
    function setGroup($value) {
        if (empty($value)) {
            throw new InvalidArgumentException('A Group cannot be empty');
        }
        if ($value < 1 || $value > 4) {
            throw new Exception('A Group has to be between 1 and 4');
        }
        $this->group = $value;
        return $this;

    }
    
    function setDeadline($value) {
        $this->deadline = $value;
    }
    
    function setStatus($value) {
        $this->status = $value;
    }
    
    function setFlag($value) {
        $this->flag = $value;
    }    
}
