<?php
namespace App\Repositories;

use App\User;
class UsersRepository{

    //all users
    public function getAll(){
        return User::all();
    }






}//end of class
