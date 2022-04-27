<?php

namespace App\Http\Livewire;

use App\Models\Events;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return Events::query()
            ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
            ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Events $model) {
                return [
                    'id' => $model->id,
                    'title' => $model->title,
                    'description' => $model->notes,
                    'date' => $model->scheduled_at,
                ];
            });
    }

    // public function onEventClick($eventId)
    // {
    //     return redirect()->route( route: 'admin')
    // }

}