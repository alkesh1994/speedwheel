<?php

namespace App\Imports;

use App\Task;
use Maatwebsite\Excel\Concerns\ToModel;

class TaskImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Task([
            'task' =>$row[0],
            'status' =>$row[1],
            'employee_id' =>$row[2],

        ]);
    }
}
