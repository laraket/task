<?php 

namespace Laraket\Task\Tests\Feature\Fake;

class Award 
{
    // money

    // coin

    protected $userId;

    protected $name;

    protected $amount;

    protected $entity;

    protected $handler;

    public function give(User $user)
    {
        echo "award is given. \n";

        $user->accept($this);

    }


}
