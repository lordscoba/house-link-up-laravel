<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Location;
use App\Models\Lgas;
use App\Models\Towns;
use Livewire\WithPagination;


class SelectHouse extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search_status = '';
    public $search_type = '';
    public $search_room = '';
    public $search_bed = '';
    public $search_bath = '';
    public $search_agency = '';
    public $search_price = '';
    public $search_area = '';
    public $state_value = '';
    public $lga_value = '';
    public $town_value = '';

    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $location = Location::all();

        // for local government area
        $location2 = Location::where('state',$this->state_value)->first();
        if ($location2) {
            $lgas = Lgas::where('state_id',$location2->id)->get();
        } else {
            $lgas = collect();
        }

        // for towns
        $lga2 = Lgas::where('lga',$this->lga_value)->first();
        if ($lga2) {
            $towns = Towns::where('lga_id',$lga2->id)->get();
        } else {
            $towns = collect();
        }

        // info('Debug message', ['data' => $towns]);

            return view('livewire.select-house', [
            'properties' => Properties::where(function ($query) {
            $query->where('property_type', 'like','%'. $this->search_type . '%')
            ->orWhere('property_type', '') // Include records with an empty string
            ->orWhereNull('property_type'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('property_status', 'like','%'. $this->search_status . '%')
            ->orWhere('property_status', '') // Include records with an empty string
            ->orWhereNull('property_status'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('rooms', 'like','%'.$this->search_room . '%')
            ->orWhere('rooms', '') // Include records with an empty string
            ->orWhereNull('rooms'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('state', 'like','%'. $this->state_value . '%')
            ->orWhere('state', '') // Include records with an empty string
            ->orWhereNull('state'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('lga', 'like','%'. $this->lga_value . '%')
            ->orWhere('lga', '') // Include records with an empty string
            ->orWhereNull('lga'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('town', 'like','%'. $this->town_value . '%')
            ->orWhere('town', '') // Include records with an empty string
            ->orWhereNull('town'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('agency', 'like','%'. $this->search_agency . '%')
            ->orWhere('agency', '') // Include records with an empty string
            ->orWhereNull('agency'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('property_price', 'like','%'. $this->search_price . '%')
            ->orWhere('property_price', '') // Include records with an empty string
            ->orWhereNull('property_price'); // Include records with a null value
            })
            ->where(function ($query) {
            $query->where('area', 'like','%'. $this->search_area . '%')
            ->orWhere('area', '') // Include records with an empty string
            ->orWhereNull('area'); // Include records with a null value
            })
            ->paginate(10, ['*'], 'index'),
            'location' => $location,
            'towns' => $towns,
            'lgas' => $lgas,
        ]);

        // return view('livewire.select-house', [
        //     'properties' => Properties::where('property_type','like','%'.$this->search_type.'%')
        //     ->where('property_status','like','%'.$this->search_status.'%')
        //     ->where('rooms','like','%'.$this->search_room.'%')
        //     ->where('state','like','%'.$this->state_value.'%')
        //     ->where('lga','like','%'.$this->lga_value.'%')
        //     ->where('town','like','%'.$this->town_value.'%')
        //     ->where('agency', 'like', $this->search_agency . '%')
        //     ->where('property_price','like','%'.$this->search_price.'%')
        //     ->where('area','like','%'.$this->search_area.'%')
        //     ->paginate(10, ['*'], 'index'),
        //     'location' => $location,
        //     'towns' => $towns,
        //     'lgas' => $lgas,
        // ]);
    }
}