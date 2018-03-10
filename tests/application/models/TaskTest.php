<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
//    private $task;
//    private $CI;
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('taskEntity');
        $this->taskEntitiy = new TaskEntity();
    }

//    public function testGetPost()
//    {
//        $_SERVER['REQUEST_METHOD'] = 'GET';
//        $_GET['foo'] = 'bar';
//        $this->assertEquals('bar', $this->CI->input->get_post('foo'));
//    }
    
    // Tests for Id
    public function testSetId_Empty()
    {
        $this->expectException('InvalidArgumentException');
        $this->taskEntitiy->id = null;
    }
    
     public function testSetId_Valid()
    {
        $testId = 1;
        $this->taskEntitiy->id = $testId;
        $this->assertEquals($testId, $this->taskEntitiy->id);
    }
    
    public function testSetId_Invalid()
    {
        $this->expectException(Exception::class);
        $this->taskEntitiy->id = -1;
    }
    
    // Tests for Task
    public function testSetTask_Empty()
    {
        $this->expectException('InvalidArgumentException');
        $this->taskEntitiy->task = "";
    }
    
     public function testSetTask_Valid()
    {
        $testTask = "Test task";
        $this->taskEntitiy->task = $testTask;
        $this->assertEquals($testTask, $this->taskEntitiy->task);
    }
    
    public function testSetTask_Invalid()
    {
        $this->expectException(Exception::class);
        $this->taskEntitiy->task = "Test task name too long tooalong too long too "
                . "long too long too long too long ";
    }
    
    // Tests for Priority
    public function testSetPriority_Empty()
    {
        $this->expectException('InvalidArgumentException');
        $this->taskEntitiy->priority = null;
    }
    
     public function testSetPriority_Valid()
    {
        $testPriority = 2;
        $this->taskEntitiy->priority = $testPriority;
        $this->assertEquals($testPriority, $this->taskEntitiy->priority);
    }
    
    public function testSetPriority_Invalid()
    {
        $this->expectException(Exception::class);
        $this->taskEntitiy->priority = 0;
    }
    
    // Tests for Size
    public function testSetSize_Empty()
    {
        $this->expectException('InvalidArgumentException');
        $this->taskEntitiy->size = null;
    }
    
     public function testSetSize_Valid()
    {
        $testSize = 2;
        $this->taskEntitiy->size = $testSize;
        $this->assertEquals($testSize, $this->taskEntitiy->size);
    }
    
    public function testSetSize_Invalid()
    {
        $this->expectException(Exception::class);
        $this->taskEntitiy->size = 0;
    }
    
    // Tests for Group
    public function testSetGroup_Empty()
    {
        $this->expectException('InvalidArgumentException');
        $this->taskEntitiy->group = null;
    }
    
     public function testSetGroup_Valid()
    {
        $testGroup = 3;
        $this->taskEntitiy->group = $testGroup;
        $this->assertEquals($testGroup, $this->taskEntitiy->group);
    }
    
    public function testSetGroup_Invalid()
    {
        $this->expectException(Exception::class);
        $this->taskEntitiy->group = 5;
    }
}