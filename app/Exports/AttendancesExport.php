<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendancesExport implements FromCollection, WithHeadings
{
    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        return Attendance::whereBetween('date', [$this->startDate, $this->endDate])
                         ->select(['date', 'student_id', 'staff_id', 'status'])
                         ->get();
    }

    public function headings(): array
    {
        return ['Date', 'Student ID', 'Staff ID', 'Status'];
    }
}
