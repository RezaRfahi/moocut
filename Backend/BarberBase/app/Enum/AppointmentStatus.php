<?php

namespace App\Enum;

enum AppointmentStatus : string
{
    case unfinished = 'unfinished';
    case running = 'running';
    case finished = 'finished';
}
