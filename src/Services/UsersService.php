<?php namespace Src\Services;

use Src\Models\User;

class UsersService extends BaseService
{
    public function getUsers(){
        return User::get();
    }

    public function getUser($idUser){
        return User::find($idUser);
    }

    public function getUsers_ById($idUsers = []){ }

    public function addUser($user){ }

    public function updateUser($user){ }

    public function deleteUser($idUser){ }

}