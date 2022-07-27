<?php
namespace App\Interfaces;

interface CourseInterface
{
    public function getCourses();
    public function getCourse($id);
    public function createCourse($data);
    public function updateCourse($id, $data);
    public function deleteCourse($id);
    public function getCourseByUser($id);
}
