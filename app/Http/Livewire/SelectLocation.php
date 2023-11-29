<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use App\Models\Lgas;
use App\Models\Towns;

class SelectLocation extends Component
{
    public $state_value = '';
    public $lga_value = '';
    public $town_value = '';
    public function render()
    {

        $location = Location::orderBy('state', 'asc')->get();

        // for local government area
        $location2 = Location::where('state',$this->state_value)->first();
        if ($location2) {
            $lgas = Lgas::where('state_id',$location2->id)->orderBy('lga', 'asc')->get();
        } else {
            $lgas = collect();
        }

        // for towns
        $lga2 = Lgas::where('lga',$this->lga_value)->first();
        if ($lga2) {
            $towns = Towns::where('lga_id',$lga2->id)->orderBy('town', 'asc')->get();
        } else {
            $towns = collect();
        }
        
        return view('livewire.select-location', [
            'location' => $location,
            'towns' => $towns,
            'lgas' => $lgas,
        ]);
    }
}