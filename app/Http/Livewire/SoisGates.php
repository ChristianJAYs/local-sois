<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Illuminate\Support\Facades\DB;
class SoisGates extends Component
{

    public $sois2;
    public $gpoa;
    public $membership;
    public $soisar;
    public $userId;

    private $getKey;
    private $gateKey;

    public function mount()
    {
        $this->userId = Auth::id();

        // echo User::find($this->userId);
        DB::table('sois_gates')->where('user_id','=',$this->userId)->update(['is_logged_in' => '1']);
        
        $this->getKey = DB::table('sois_gates')->where('user_id','=',$this->userId)->first();

        $this->gateKey = $this->getKey->gate_key;

        // dd($this->gateKey);
    }

    public function sois2Function()
    {
        $this->sois2 = 'http://sois2.puptaguigcs.net/$0lsL0gIn/idem/'.$this->userId.'/gateportal/'.$this->gateKey;
        return $this->sois2;
    }
    public function gpoaFunction()
    {
        $this->gpoa = 'http://sois-gpoa.puptaguigcs.net/'; 
        return $this->gpoa;
    }
    public function membershipFunction()
    {
        $this->membership = 'http://sois-membership.puptaguigcs.net/'; 
        return $this->membership;
    }
    public function soisarFunction()
    {
        $this->soisar = 'http://sois-ar.puptaguigcs.net/'; 
        return $this->soisar;
    }

    public function render()
    {
        return view('livewire.sois-gates',[
            'sois2' => $this->sois2Function(),
            'gpoa' => $this->gpoaFunction(),
            'member' => $this->membershipFunction(),
            'soisar' => $this->soisarFunction(),
        ]);
    }
}
