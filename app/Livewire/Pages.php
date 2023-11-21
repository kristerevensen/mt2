<?php

namespace App\Livewire;

use Livewire\Component;

class Pages extends Component
{
    public function render()
    {

        //$projects = Project::where("user_id", auth("")->user()->id)->paginate(10);
        return view('livewire.pages',[
            //  'projects' => $projects
          ]);
    }
}
