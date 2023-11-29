<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use App\Models\Lgas;
use App\Models\Towns;
use App\Models\Properties;


class SelectLocationUpdate extends Component
{
    
    public $property_id = '';
    public $state_value = '';
    public $lga_value = '';
    public $town_value = '';

    public function mount($property_id)
    {

        // get properties data
        $properties2 = Properties::findOrFail($this->property_id);

        $this->state_value = $properties2->state;
        $this->lga_value = $properties2->lga;
        $this->town_value = $properties2->town;
    }
    
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

        return view('livewire.select-location-update', [
            'location' => $location,
            'towns' => $towns,
            'lgas' => $lgas,
        ]);
    }
}