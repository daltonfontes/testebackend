<?php

use App\Models\Course;
use App\Interfaces\CourseInterface;

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
        return Course::create($data);
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
}
