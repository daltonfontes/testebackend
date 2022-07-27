<?php
namespace App\Repositories;

use App\Models\File;
use App\Interfaces\FileInterface;

class FileRepository  implements FileInterface
{
    public function getFiles()
    {
        return File::all();
    }

    public function getFile($id)
    {
        return File::find($id);
    }

    public function createFile($data)
    {
        return File::create($data);
    }

    public function deleteFile($id)
    {
        $file = File::find($id);
        $file->delete();
        return $file;
    }

    public function downloadFile($name)
    {
        return File::where('name', $name)->first();
    }
}
