<?php

namespace App\Http\Livewire\Contato;

use App\Models\Contato;
use Livewire\Component;

class DeletarContato extends Component
{
    public Contato $contato;

    protected $listeners = [
        'atualizarContato' => '$refresh',
        'atualizarListaDeContatos' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.contato.deletar-contato');
    }

    public function deletarContato()
    {
        $this->contato->delete();

        $this->emit('atualizarListaDeContatos');
    }
}
