<div>
    <h2 class="text-2xl">{{ $this->startsAt->format('M Y') }}</h2>
    <div>
        @livewireScripts
            @livewireCalendarScripts
                <livewire:appointments-calendar
                event-view="path/to/view/starting/from/views/folder"
                day-of-week-view="path/to/view/starting/from/views/folder"
                before-calendar-view="path/to/view/starting/from/views/folder"
                after-calendar-view="path/to/view/starting/from/views/folder"
                drag-and-drop-classes="css classes"
                />
        <!-- <livewire:appointments-calendar/> -->
    </div>
</div>