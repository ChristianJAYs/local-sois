<div class="p-5">
    <div class="grid grid-cols-12">
        <div class="col-span-3" style="background:red;">
            <div>
                <table style="width:100%">
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">First Name</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Middle Name</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Last Name</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Suffix</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Email</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Course</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Gender</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Student Number</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Date of Birth</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Mobile Number</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Address</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Year and Section</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-span-3" style="background:blue;">
            <div>
                <table>
                    @if($displayUserSelectedData->count())
                        @foreach($displayUserSelectedData as $item)
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->first_name != null)
                                        {{ $item->first_name }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->middle_name != null)
                                    {{ $item->middle_name }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->last_name != null)
                                        {{ $item->last_name }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->suffix != null)
                                        {{ $item->suffix }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->email != null)
                                        {{ $item->email }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @foreach($displayUserCourseData as $course)
                                        @if($course->course_id != null)
                                            {{ $course->course_name }}
                                        @else
                                            <p>Data Unavailable</p>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @foreach($displayUserGendereData as $gender)
                                        @if($gender->gender_id != null)
                                            {{ $gender->gender }}
                                        @else
                                            <p>Data Unavailable</p>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->student_number != null)
                                        {{ $item->student_number }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->date_of_birth != null)
                                        {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($item->date_of_birth))) !!}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->mobile_number != null)
                                        {{ $item->mobile_number }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->address != null)
                                        {{ $item->address }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                    @if($item->year_and_section != null)
                                        {{ $item->year_and_section }}
                                    @else
                                        <p>Data Unavailable</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">
                                No Results Found
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        <div class="col-span-3" style="background:red;">
            <div>
                <table style="width:100%">
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Organization</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Role</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">SOIS Key</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Permissions</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-span-3" style="background:blue;">
            <div>
                <table style="width:100%">
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Organization</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">SOIS Key</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Role</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm whitespace-no-wrap">Permissions</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="p-3">
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Update User Data
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Update User Password
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Add Role
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Change Role
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Generate Key
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Add Permission
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-2" onclick="updateSelectedUserData()">
                Add Organization
            </x-jet-secondary-button>
        </div>
    </div>
    <div id="SelectedUserUpdateData" class="pt-5">
        <div>
            <div class="mt-4">
                <x-jet-label for="first_name" value="{{ __('first name') }}" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="first_name_DB" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="middle_name" value="{{ __('first name') }}" />
                <x-jet-input id="middle_name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="middle_name_DB" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('last name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" wire:model="last_name_DB" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model="email_DB" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label value="{{ __('Course') }}" />
                <select wire:model="course_id_DB" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 round leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach($displayCourseDromDBForUpdateSelect as $selectedCouse)
                                <option default hidden value="{{$selectedCouse->course_id}}">{{$selectedCouse->course_name}}</option>
                            @endforeach
                            @foreach($displayCourseDromDB as $courses)
                                <option value="{{$courses->course_id}}">{{$courses->course_name}}</option>
                            @endforeach
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label value="{{ __('Gender') }}" />
                <select wire:model="gender_id_DB" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 round leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach($displayGenderDromDBForUpdateSelect as $selectedGender)
                                <option default hidden value="{{$selectedGender->gender_id}}">{{$selectedGender->gender}}</option>
                            @endforeach
                            @foreach($displayGenderDromDB as $genders)
                                <option value="{{$genders->gender_id}}">{{$genders->gender}}</option>
                            @endforeach
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="{{ __('Birth Date') }}" />
                <x-jet-input wire:model="date_of_birth_DB" id="date_of_birth" class="block mt-1 w-full" type="date" required/>
            </div>
            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" wire:model="address_DB" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="mobile_number" value="{{ __('Mobile Number') }}" />
                <x-jet-input id="mobile_number" class="block mt-1 w-full" type="text" wire:model="mobile_number_DB" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="student_number" value="{{ __('student_number') }}" />
                <x-jet-input id="student_number" class="block mt-1 w-full" type="text" wire:model="student_number_DB" required autofocus />
            </div>
            <button class="ml-2" wire:click="update" onclick="authOnload()">
                {{ __('Update User') }}
            </button>  
        </div>
    </div>
</div>