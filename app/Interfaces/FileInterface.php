<?php
namespace App\Interfaces;

interface FileInterface
{
    public function getFiles();
    public function getFile($id);
    public function createFile($data);
    public function deleteFile($id);
    public function downloadFile($name);
}
