<?php
namespace App\Repositories;

use App\Models\Course;
use App\Interfaces\CourseInterface;
use App\Models\User;

class CourseRepository implements CourseInterface
{
    public function getCourses()
    {
        return Course::all();
    }

    public function getCourse($id)
    {
        return Course::find($id);
    }

    public function createCourse($data)
    {
        $user = User::find(['id']);
        $course = Course::insert($data)->where('users_id', $user->id);
    }

    public function updateCourse($id, $data)
    {
        $course = Course::find($id);
        $course->update($data);
        return $course;
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        $course->delete();
        return $course;
    }

    public function getCourseByUser($id)
    {
        return Course::where('users_id', $id)->get();
    }
}
