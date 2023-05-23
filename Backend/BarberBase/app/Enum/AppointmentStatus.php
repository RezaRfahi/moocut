<?php

namespace App\Enum;

enum AppointmentStatus : string
{
    case pending = 'unfinished';
    case confirmed = 'running';
    case completed = 'finished';
    case cancelled = 'cancelled';
}
