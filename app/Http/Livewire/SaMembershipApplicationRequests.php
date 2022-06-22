<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

use Illuminate\Validation\Rule;
use Livewire\WithPagination;

use Illuminate\Support\STR;

use Storage;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use \Carbon\Carbon;
use Datetime;
use DatePeriod;
use DateInterval;


class SaMembershipApplicationRequests extends Component
{
    use WithPagination;

    private $organizationID;
    private $organizationData;

    public function get_data_from_DB()
    {
        $this->organizationData = DB::table('role_user')->where('user_id','=',Auth::id())->first();
        $this->organizationID = $this->organizationData->organization_id;
        // dd(
            return DB::table('academic_applications')->join('academic_membership','academic_membership.academic_membership_id','=','academic_applications.membership_id')
                            ->join('organizations','organizations.organization_id','=','academic_membership.organization_id')
                            ->where('application_status','=','pending')
                            ->orderBy('application_id','DESC')
                            ->paginate(5, ['*'], 'applicants');
                            // ->get()
        // );
    }
    public function render()
    {
        return view('livewire.sa-membership-application-requests',[
            'list_data_from_DB' => $this->get_data_from_DB(),
        ]);
    }
}
