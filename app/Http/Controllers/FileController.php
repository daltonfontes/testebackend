<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FileRepository;

class FileController extends Controller
{
    public $repository;

    public function __construct(FileRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = $this->repository->getFiles();
        return response()->json([
            'message' => 'Files found',
            'data' => $files
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $file = $this->repository->createFile($data);
            return response()->json([
                'message' => 'File created successfully',
                'data' => $file
            ], 201);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $file = $this->repository->getFile($id);
            return response()->json([
                'message' => 'File found',
                'data' => $file
            ], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $file = $this->repository->deleteFile($id);
            return response()->json([
                'message' => 'File deleted successfully',
                'data' => $file
            ], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function getFile($id)
    {
        try {
            $file = $this->repository->getFile($id);
            return response()->download($file->path);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
