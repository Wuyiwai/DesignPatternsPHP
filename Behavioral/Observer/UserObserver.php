<?php


namespace DesignPatterns\Behavioral\Observer;


use SplSubject;

class UserObserver implements \SplObserver
{
    /**
     * @var User[]
     */
    private $changedUsers = [];

    /**
     * 它通常使用  SplSubject::notify()  通知主体
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}