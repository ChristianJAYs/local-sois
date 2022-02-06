<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use \Carbon\Carbon;
use Datetime;
use DatePeriod;
use DateInterval;

class isSuperAdminMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;
    protected $userData;
    protected $role;
    protected $userId;
    protected $newTime;
    protected $currentTime;
    protected $dbTime;
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->hello = "hello";
    }






    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        // dd(Auth::id());
        $this->userId = Auth::id();

        // echo User::find($this->userId);
        // DB::table('sois_gates')->where('user_id','=',$this->userId)->update(['is_logged_in' => '1']);


        date_default_timezone_set('Asia/Manila');
        
        // echo date('H:i:s');
        // $currentTime = date('H:i:s');
        // // DB::table('sois_gates')->where('user_id','=',$this->userId)->update(['gate_time_close' => $currentTime]);

        // echo '<br><br><br>';

        // $newTime=date('H:i:s', strtotime("+10 mins"));
        // echo $newTime;
        // echo '<br><br><br>';

        // $dbTime = DB::table('sois_gates')->where('user_id','=',$this->userId)->pluck('gate_time_close');

        // echo $dbTime;

        // if ($currentTime < $dbTime) {
        //     echo "HEllo";
        // }else{
        //     echo "world";
        // }

        // dd(date('H:i:s'));

        // $this->checkCurrentDate = date('Y-m-d');
        // $this->checkCurrentTime = date('H:i:s');
        // $this->getAnnouncementDateFromDB = DB::table('announcements')->get();
        // $this->countDBTable = DB::table('announcements')->count();
        // foreach ($this->getAnnouncementDateFromDB as $this->data) {
        //             // echo $this->data;
        //         if($this->data->exp_date < $this->checkCurrentDate){
        //             $this->dateIDExpired = $this->data->announcements_id;
        //             // if ($this->data->exp_time < $this->checkCurrentTime) {
        //                 Announcement::where('announcements_id', '=', $this->dateIDExpired)->update(['status' => '0']);
        //             // }    
        //         }
        //         else{
        //             $this->dateIDExpired = $this->data->announcements_id;
        //             // if ($this->data->exp_time < $this->checkCurrentTime) {
        //                 Announcement::where('announcements_id', '=', $this->dateIDExpired)->update(['status' => '1']);
        //             // }
        //         }
        // }


        $this->userData = User::find($this->userId);
        // dd($this->userData);
        $this->role = $this->userData->roles->first();
        // dd($this->role->role_name);


        if ($this->role->role !== "Super Admin") {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}