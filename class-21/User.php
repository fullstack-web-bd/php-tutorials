<?php

require_once 'Friendable.php';
require_once 'UserJob.php';
require_once 'Sanitizer.php';

class User
{
    use Friendable, UserJob, Sanitizer;

    public int $id;
    public string $name;
    public string $date_of_birth;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function testing()
    {
        $this->send_friend_request(1, 2);
    }
}
