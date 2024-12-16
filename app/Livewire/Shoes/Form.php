<?php

namespace App\Livewire\Shoes;

use App\Models\ImageDetail;
use App\Models\Shoes;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;
use Livewire\Component;

class Form extends Component
{
    use WithFileUploads;
    #[Title("ShoesCycle | Tambah Sepatu")]

    public $name, $size, $price, $stock, $description;
    public $image = [];


    protected $rules = [
        'name' => 'required|min:5',
        'size' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'description' => 'required|min:4',
        'image.*' => 'required|image|mimes:jpg,png,webp,jpeg'
    ];

    public function render()
    {
        return view('livewire.shoes.form');
    }

    public function save()
    {
        $validatedData = $this->validate();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validasi = $this->validate();

        $shoes = Shoes::create([
            'name' => $this->name,
            'size' => $this->size,
            'price' => $this->price,
            'stock' => $this->stock,
            'description' => $this->description,
        ]);

        foreach ($this->image as $img) {
            $fileName = rand(1000, 9999) . date("ymdHis") . '_' . $img->getClientOriginalExtension();
            $validasi = $img->storePubliclyAs('shoes', $fileName, 'public');

            ImageDetail::create([
                'shoes_id' => $shoes->id,
                'image' => $validasi
            ]);
        }

        return $this->redirectRoute('shoes.index', navigate: true);
    }
}
