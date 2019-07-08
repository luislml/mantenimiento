<?php

namespace App\Services;

use App\Models\Unidad;

class Faculties
{
    public function get()
    {
        $faculties = Unidad::get();
        $facultiesArray[''] = 'Selecciona Unidad';
        foreach ($faculties as $faculty) {
            $facultiesArray[$faculty->id] = $faculty->nombre;
        }
        return $facultiesArray;
    }
}

