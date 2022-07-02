<?php

trait Friendable {
    public function send_friend_request($user2_id)
    {
        echo "User ID: " . $this->id . " sent friend request to User ID: " . $user2_id;
    }

    public function show_all_friends($user1)
    {
        //
    }

    public function isBlockedFriend($user1, $user2)
    {
        //
    }
}