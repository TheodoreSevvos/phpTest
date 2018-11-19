<?php
interface SocialService
{
    public function subscribe($email);
    public function unsubscribe($email);
    public function sendUpdates();
}