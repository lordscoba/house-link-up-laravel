<?php

namespace App\Http\Livewire;
use App\Models\Lgas;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ManageLGA extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $state_id, $lga, $lga_id;
    public $createMode = true;
    public $updateMode = true;


    protected $rules = [
        'state_id' => 'required',
        'lga' => 'required|unique:lgas',
    ];

    // for render
    public function render()
    {
        return view('livewire.manage-l-g-a', [
            'lgas' => Lgas::paginate(5),
            'state_id' => $this->state_id,
        ]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->state_id = '';
        $this->lga = '';
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
        $this->lga = "";

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate();

        $lgas = Lgas::create([
            'state_id' => $this->state_id,
            'lga' => $this->lga,
        ]);

        

        session()->flash('message', 'Local government area Updated Successfully.');

        $this->resetInputFields();
        return redirect()->back();
    }

    // for delete
    public function destroy($id)
    {
        Lgas::find($id)->delete();
        session()->flash('success', 'Record deleted successfully.');
        return redirect()->back();
    }

    // for update
    public function edit($id)
    {
        $lgas = Lgas::findOrFail($id);
        $this->lga_id = $lgas->id;
        $this->lga = $lgas->lga;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update($id)
    {
        $this->validate();

        $lgas = Lgas::findOrFail($id);

        $lgas->update([
            'lga_id' => $this->lga_id,
            'lga' => $this->lga,
        ]);
        session()->flash('message', 'LGA Updated Successfully.');
        return redirect()->back();
    }

}