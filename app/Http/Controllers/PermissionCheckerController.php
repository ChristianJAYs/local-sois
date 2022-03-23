<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Auth;
use Illuminate\Support\Facades\DB;
class PermissionCheckerController extends Controller
{
    public $perms;
    public $permission;
    public $id;
    public $permission_data;

    public function test($permission,$id)
    {
        if (Permission::where('name', $permission)->exists()) {
            return true;
        }else{
            return false;
            // abort(403, 'Unauthorized action.');
        }
    }
}
