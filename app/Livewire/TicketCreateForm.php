<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Subcategory;
use App\Models\Ticket;
use Livewire\Component;
use Log;

class TicketCreateForm extends Component
{
    public $problem_since;
    public $description;
    public $priority_id = "";
    public $category_id = "";
    public $subcategory_id = "";
    public $priorities = [];
    public $categories = [];
    public $subcategories = [];

    //

    public $category_description = "";
    public $priority_description = "";
    public $subcategory_description = "";


    public function mount()
    {
        $this->priorities = Priority::all();
        $this->categories = Category::all();
    }

    public function submit()
    {
        Ticket::create([
            'problem_since' => $this->problem_since,
            'description' => $this->description,
            'priority_id' => $this->priority_id,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id

        ]);
        return redirect(route('ticket.index'));
    }

    public function updatedCategoryId($value)
    {
        $category = Category::find($value);
        $this->category_description = $category?->description ?? '';
        $this->subcategories = $category->subcategories ?? [];
    }

    public function updatedPriorityId($value)
    {
        $priority = Priority::find($value);
        $this->priority_description = $priority?->description ?? '';
    }
    public function updatedSubcategoryId($value)
    {
        $subcategory = Subcategory::find($value);
        $this->subcategory_description = $subcategory->description ?? '';
    }


    public function render()
    {
        return view('livewire.ticket-create-form');
    }
}
