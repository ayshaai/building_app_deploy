<?php

namespace App\Exports;
//
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
//
class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            '',
            'Age',
            'Created at',
            'Updated at',
        ];
    }

    public function collection()

    { //to show all users
        return User::all();
        //to show custom users
       // return User::where('id','>',3)->get();
    }
}
