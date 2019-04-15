<?php 

namespace Laraket\Task\Tests\Feature\Fake;

class Task 
{
    protected $name;

    protected $intro;

    protected $target;

    protected $times;

    protected $award;

    protected $status;

    protected $user;

    public function canStart(): bool 
    {
        return true;
    }

    public function start()
    {
        echo "task: {$this->name} is started.\n";
    }

    public function end()
    {
        echo "task: {$this->name} is ended.\n";

        $this->award->give($this->user);

    }

    public function isEnd(): bool
    {
        return true;
    }

    public function setAward(Award $award) 
    {
        $this->award = $award;
    }


    public function setUser(User $user)
    {
        $this->user = $user;
    }

}
