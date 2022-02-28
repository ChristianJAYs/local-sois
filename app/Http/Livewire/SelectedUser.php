<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Storage;

use App\Models\User;
use App\Models\Organization;
use App\Models\Article;
use App\Models\AssetType;
use App\Models\OrganizationAsset;
use App\Models\SystemAsset;

use Livewire\withPagination;
use Illuminate\Support\STR;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SelectedUser extends Component
{
    use withPagination;
    public $userInt;
    public $explodedLink;
    public $actual_link;

    private $SelectedUserData;
    public $SelectedUserCourse;
    public $SelectedUserGender;

    public $name;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $date_of_birth;
    public $address;
    public $mobile_number;
    public $email;
    public $password;
    public $student_number;
    public $course_id;
    public $course_ids;
    public $gender_id;
    public $gender_ids;

    public $first_name_DB;
    public $middle_name_DB;
    public $last_name_DB;
    public $date_of_birth_DB;
    public $address_DB;
    public $mobile_number_DB;
    public $email_DB;
    public $password_DB;
    public $student_number_DB;
    public $course_id_DB;
    public $gender_id_DB;

    public $data;
    public $course_type = '0';
    public $displayCourseName;

    public function mount()
    {
        $this->actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->explodedLink = explode("/",$this->actual_link);
        $this->userInt = (int) $this->explodedLink[5];
    }

    public function getUserData()
    {
        return DB::table('users')->where('user_id','=',$this->userInt)->paginate(1);
    }
    public function getUserCourse()
    {
        $this->SelectedUserCourse = DB::table('users')->where('user_id','=',$this->userInt)->pluck('course_id');
        return DB::table('courses')->where('course_id','=',$this->SelectedUserCourse)->get();
    }
    public function getUserGender()
    {
        $this->SelectedUserGender = DB::table('users')->where('user_id','=',$this->userInt)->pluck('gender_id');
        return DB::table('genders')->where('gender_id','=',$this->SelectedUserGender)->get();
    }
    public function getCourseData()
    {
        return DB::table('courses')->get();
    }
    public function getUserCourseFromDatabaseForUpdateSelection()
    {
        $this->SelectedUserCourse = DB::table('users')->where('user_id','=',$this->userInt)->pluck('course_id');
        return DB::table('courses')->where('course_id','=',$this->SelectedUserCourse)->get();
    }
    public function getGenderData()
    {
        return DB::table('genders')->get();
    }
    public function getUserGenderFromDatabaseForUpdateSelection()
    {
        // $this->SelectedUserData = DB::table('users')->where('user_id','=',$this->userInt)->get();
        $this->SelectedUserGender = DB::table('users')->where('user_id','=',$this->userInt)->pluck('gender_id');
        // $this->SelectedUserGender = $this->SelectedUserData->gender_id;
        return DB::table('genders')->where('gender_id','=',$this->SelectedUserGender)->get();
    }


    /*=========================================================
    =            Update User Section comment block            =
    =========================================================*/
        public function getUserDataFromDatabase()
        {
            $this->data = User::find($this->userInt);
            // dd($this->data);
            $this->first_name = $this->data->first_name;
            $this->middle_name = $this->data->middle_name;
            $this->last_name = $this->data->last_name;
            $this->date_of_birth = $this->data->date_of_birth;
            $this->course_id = $this->data->course_id;
            $this->address = $this->data->address;
            $this->gender_id = $this->data->gender_id;
            $this->email = $this->data->email;
            $this->mobile_number = $this->data->mobile_number;
            $this->student_number = $this->data->student_number;
        }
        public function modelUpdateUser()
        {
            return [
                'first_name' => $this->first_name_DB,
                'middle_name' => $this->middle_name_DB,
                'last_name' => $this->last_name_DB,
                'date_of_birth' => $this->date_of_birth_DB,
                'course_id' => $this->course_id_DB,
                'address' => $this->address_DB,
                'gender_id' => $this->gender_id_DB,
                'email' => $this->email_DB,
                'mobile_number' => $this->mobile_number_DB,
                'student_number' => $this->student_number_DB,
            ];
        }
        public function update()
        {
            User::find($this->userInt)->update($this->modelUpdateUser());
            $this->reset(['first_name','middle_name','last_name','date_of_birth','address','mobile_number','email','password','student_number','course_id','course_ids','gender_id','gender_ids','first_name_DB','middle_name_DB','last_name_DB','date_of_birth_DB','address_DB','mobile_number_DB','email_DB','password_DB','student_number_DB','course_id_DB','gender_id_DB',]);
            // $this->redirector();
        }
        public function redirector()
        {
            return redirect('/users/selected-user/'.$this->userInt);
        }
    /*=====  End of Update User Section comment block  ======*/
    


    public function render()
    {
        return view('livewire.selected-user',[
            'displayUserSelectedData' => $this->getUserData(),
            'displayUserCourseData' => $this->getUserCourse(),
            'displayUserGendereData' => $this->getUserGender(),
            'displayUserDromDB' => $this->getUserDataFromDatabase(),
            'displayCourseDromDB' => $this->getCourseData(),
            'displayCourseDromDBForUpdateSelect' => $this->getUserCourseFromDatabaseForUpdateSelection(),
            'displayGenderDromDB' => $this->getGenderData(),
            'displayGenderDromDBForUpdateSelect' => $this->getUserGenderFromDatabaseForUpdateSelection(),
        ]);
    }
}
