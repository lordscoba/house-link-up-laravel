<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Lgas;
use App\Models\Towns;

class ManageTowns extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $lga_id, $town, $town_id,$state_id;
    public $createMode = true;
    public $updateMode = true;


    protected $rules = [
        'lga_id' => 'required',
        'town' => 'required|unique:towns',
    ];

    // for render
    public function render()
    {
        return view('livewire.manage-towns', [
            'towns' => Towns::where('lga_id', $this->lga_id)->paginate(5),
            'lga_id' => $this->lga_id,
        ]);
    }

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->lga_id = '';
        $this->town = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->createMode = false;
        $this->updateMode = false;
        // $this->resetInputFields();
    }

        // for create

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->state_id = "";
        $this->lga_id = "";
        $this->town = "";

    }

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate();

        $towns = Towns::create([
            'state_id' => $this->state_id,
            'lga_id' => $this->lga_id,
            'town' => $this->town,
        ]);

        session()->flash('message', 'towns Updated Successfully.');

        // $this->resetInputFields();
        return redirect()->back();
    }


    // for update
    public function edit($id)
    {
        $towns = Towns::findOrFail($id);
        $this->town_id = $towns->id;
        $this->town = $towns->town;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update($id)
    {
        $validatedData = $this->validate([
        'town_id' => 'required',
        'town' => 'required|unique:towns',
        ]);

        $towns = Towns::findOrFail($id);

        $towns->update([
            'town_id' => $this->town_id,
            'town' => $this->town,
        ]);
        session()->flash('message', 'Town Updated Successfully.');
        return redirect()->back();
    }

        // for delete
    public function destroy($id)
    {
        Towns::find($id)->delete();
        session()->flash('success', 'Record deleted successfully.');
        return redirect()->back();
    }
    
}