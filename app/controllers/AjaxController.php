<?php

class AjaxController extends \BaseController
{
    function __construct()
    {
        $this->beforeFilter('auth', ['only' => 'getUserInfo']);
    }


    public function getUserInfo()
    {
        $user = Auth::user();

        return $user->toArray();
    }


}
