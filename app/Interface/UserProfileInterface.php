<?php

namespace App\Interface;

interface UserProfileInterface
{
    public function profileOrder($slug);
    public function track($request);
}
