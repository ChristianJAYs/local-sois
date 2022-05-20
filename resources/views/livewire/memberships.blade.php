<div class="p-6">
    <h2 class="table-title">PUP Organizations</h2>

    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
            <a href="#">
            <x-jet-button>
                {{ __('Create Organization') }}
            </x-jet-button>
            </a>
    </div>

    <div class="flex flex-col items-center">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <livewire:memberships
                        exportable
                        hideable
                    />
                </div>
            </div>
        </div>
    </div>








<!-- final div -->
</div>
