<?php
namespace App\Repositories;

use App\Models\Activitie;
use App\Interfaces\ActivitieInterface;

class ActivitieRepository implements ActivitieInterface
{
    public function getActivities()
    {
        return Activitie::all();
    }

    public function getActivitie($id)
    {
        return Activitie::find($id);
    }

    public function createActivitie($data)
    {
        return Activitie::create($data);
    }

    public function updateActivitie($id, $data)
    {
        $activitie = Activitie::find($id);
        $activitie->update($data);
        return $activitie;
    }

    public function deleteActivitie($id)
    {
        $activitie = Activitie::find($id);
        $activitie->delete();
        return $activitie;
    }
}
