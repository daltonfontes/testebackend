<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ActivitieRepository;

class ActivitieController extends Controller
{
    public $repository;

    public function __construct(ActivitieRepository $repository)
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
        $activities = $this->repository->getActivities();
        return response()->json([
            'message' => 'Activities found',
            'data' => $activities
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
            $activity = $this->repository->createActivitie($data);
            return response()->json([
                'message' => 'Activity created successfully',
                'data' => $activity
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
            $activity = $this->repository->getActivitie($id);
            return response()->json([
                'message' => 'Activity found',
                'data' => $activity
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
        try {
            $data = $request->all();
            $activity = $this->repository->updateActivitie($id, $data);
            return response()->json([
                'message' => 'Activity updated successfully',
                'data' => $activity
            ], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
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
            $activity = $this->repository->deleteActivitie($id);
            return response()->json([
                'message' => 'Activity deleted successfully',
                'data' => $activity
            ], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
