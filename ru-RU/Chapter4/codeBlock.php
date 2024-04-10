<?php

class User
{
    // ...
    public function __construct(UserId $userId, $email, $password)
    {
        $this->setUserId($userId);
        $this->setEmail($email);
        $this->setPassword($password);
        DomainEventPublisher::instance()->publish(
            new UserRegistered($this->userId)
        );
    }
}