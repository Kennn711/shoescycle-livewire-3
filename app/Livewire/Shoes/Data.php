<?php

namespace App\Livewire\Shoes;

use App\Models\Shoes;
use Livewire\Attributes\Title;
use Livewire\Component;

class Data extends Component
{
    #[Title("ShoesCycle | Shoes Data")]

    public $shoes;

    public function render()
    {
        return view('livewire.shoes.data');
    }

    public function mount()
    {
        $this->shoes = Shoes::with('imagedetail')->get();
    }

    public function destroy($id)
    {
        $shoes = Shoes::find($id);
    }
}
