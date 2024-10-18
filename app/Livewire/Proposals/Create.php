<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use App\Models\Proposal;
use Livewire\Component;

class Create extends Component
{
    public Project $project;
    public bool $modal = false;
    public string $email = '';
    public int $hours = 0;

    public function save()
    {
        $this->project->proposals()
            ->updateOrCreate(
                ['email' => $this->email],
                ['hours' => $this->hours]
            );

        $this->modal = false;
    }
    public function render()
    {
        return view('livewire.proposals.create');
    }
}
