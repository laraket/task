<?php

namespace Laraket\Task\Tests\Feature;

use Laraket\Task\Tests\IntegrationTestCase;
use Laraket\Task\Tests\Feature\Fake\Task;
use Laraket\Task\Tests\Feature\Fake\Award;
use Laraket\Task\Tests\Feature\Fake\User;

class TaskTest extends IntegrationTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/task');

        $response->assertStatus(200);
    }

    public function testTask()
    {
        $task = new Task();

        $user = new User();
        
        var_dump($task);

        $task->setAward(new Award());

        $task->setUser(new User());

        if ($task->canStart()) {
            $task->start();
        }

        if ($task->isEnd()) {
            $task->end();
        }
    }
}
