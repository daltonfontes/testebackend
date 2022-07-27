<?php
namespace App\Interfaces;

use Symfony\Component\HttpFoundation\Request;

interface UserInterface
{
    public function getUsers();
    public function createUser(Request $request);
    public function getUser($id);
    public function updateUser(Request $request, $id);
    public function deleteUser($id);
}
