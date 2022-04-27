<?php

namespace App\Http\Livewire;

use App\Models\Events;
use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public function events() : Collection
    {
        return Events::query()
        ->get()
        ->map(function (Model $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'start' => $model->start,
                'end' => $model->end,
            ];
        });
    }
}