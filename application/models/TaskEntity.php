<?php

/**
 * Task entity class, with setter methods for each property.
 */
class TaskEntity extends CI_Model {
    
    var $id;
    var $task;
    var $priority;
    var $size;
    var $group;
    var $deadline;
    var $status;
    var $flag;   

    // If this class has a setProp method, use it, else modify the property directly
    public function __set($key, $value) {
        // if a set* method exists for this key, 
        // use that method to insert this value. 
        // For instance, setName(...) will be invoked by $object->name = ...
        // and setLastName(...) for $object->last_name = 
        $method = 'set' . str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $key)));

        if (method_exists($this, $method))
        {
            $this->$method($value);

            return $this;
        }

        // Otherwise, just set the property value directly.
        $this->$key = $value;
        
        return $this;
    }
    
    function setId($value) {
        $this->id = $value;
    }
    
    function setTask($value) {
        $this->task = $value;
    }
    
    function setPriority($value) {
        $this->priority = $value;
    }
    
    function setSize($value) {
        $this->size = $value;
    }
    
    function setGroup($value) {
        $this->group = $value;
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
