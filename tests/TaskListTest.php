<?php
use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase
{
    private $CI;
    private $tasks;
    private $taskslist;
    
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->tasks = new Tasks();
        $this->taskslist = $this->tasks->all();
    }

    public function testMajorityUncompletedTasks()
    {
        $uncompleted = 0;
        $completed = 0;

        foreach ($this->taskslist as $task)
        {
            if ($task->status == 2)
                ++$completed;
            else
                ++$uncompleted;
        }

        $this->assertTrue($uncompleted > $completed);
    }
}