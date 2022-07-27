<?php
namespace App\Interfaces;

use Symfony\Component\HttpFoundation\Request;

interface UserInterface
{
    public function getUsers();
    public function createUser($data);
    public function getUser($id);
    public function updateUser($data, $id);
    public function deleteUser($id);
}
