<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Organization;
use App\Models\Article;
use App\Models\AssetType;
use App\Models\OrganizationAsset;
use App\Models\SystemAsset;
use App\Models\AcademicMember;
use App\Models\AcademicMemberships;

use Livewire\WithPagination;
use Illuminate\Support\STR;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;

use Auth;

class Memberships extends LivewireDatatable
{

    use WithPagination;

    private $organizationID;
    private $organizationData;

    public $exportable = true;
    public $hideable = 'select';

    public $model = AcademicMemberships::class;

    // public function builder()
    // {
    //     return Memberships::query();
    // }

    /*==============================================
    =            calling tables section            =
    ==============================================*/
    
    public function columns()
    {
        return[

            NumberColumn::name('academic_membership_id')
                ->label('ID')
                ->defaultSort('asc')
                ->hideable()
                ->sortBy('academic_membership_id'),

            NumberColumn::name('organization_id')
                ->label('Orgaization Id')
                ->filterOn('organization_id')
                ->filterable()
                ->searchable(),

            NumberColumn::name('membership_fee')
                ->label('Fee')
                ->filterable()
                ->searchable(),

            Column::name('semester')
                ->label('Semester')
                ->filterable()
                ->searchable(),

            Column::name('school_year')
                ->label('School Year')
                ->filterable()
                ->searchable(),

            DateColumn::name('membership_start_date')
                ->label('Member Start Date'),

            DateColumn::name('membership_end_date')
                ->label('Member End Date')
                ->filterable()
                ->searchable(),

            Column::name('registration_status')
                ->label('Registration Status'),

            DateColumn::name('registration_start_date')
                ->label('Registration Start')
                ->filterable(),

            DateColumn::name('registration_end_date')
                ->label('Registration End')
                ->filterable()
                ->searchable(),

            Column::name('am_status')
                ->label('Status')
                ->filterable()
                ->searchable(),

        ];
    }
    
    /*=====  End of calling tables section  ======*/
}
