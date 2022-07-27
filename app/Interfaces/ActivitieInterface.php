<?php
namespace App\Interfaces;

interface ActivitieInterface
{
    public function getActivities();
    public function getActivitie($id);
    public function createActivitie($data);
    public function updateActivitie($id, $data);
    public function deleteActivitie($id);
}
