<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CheckStatuses extends Component
{
    public $statuses;

    public function render()
    {
        return view('livewire.check-statuses');
    }

    public function check_status($p_status_id)
    {

        $access = DB::table('pivot_statuses')->where('id', $p_status_id)->first('access');
    $val =!$access->access;
//     dd((bool)$access->access,$val);
        DB::table('pivot_statuses')->where('id', $p_status_id)->update(['access' => $val]);
    }
}
