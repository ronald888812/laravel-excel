<?php

namespace App\Imports;

use App\Models\temp;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
class UsersImport implements ToModel,WithStrictNullComparison
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new temp([
            'nama'     => $row[0],
            'umur'    => $row[1],
        ]);
    }
}
