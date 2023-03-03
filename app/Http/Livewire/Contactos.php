<?php

namespace App\Http\Livewire;
use App\Models\Contacto;
use Livewire\Component;

class Contactos extends Component
{
    public $nome, $email, $assunto, $mensagem;

    public function rules(){
        return[
            'prosposta'=>'required',
            'email'=>'required',
            'assunto'=>'required',
            'mensagem'=>'required',
        ];
    }

    public function modelData(){

        return[
            'nome'=>$this->nome,
            'email'=>$this->email,
            'assunto'=>$this->assunto,
            'mensagem'=>$this->mensagem,
        ];
    }

    public function create(){


        $this->validate();
        Contacto::create($this->modelData());
        $this->reset();
        return Redirect::back()->with('message','Mensagem enviada com sucesso!');
    }

    public function render()
    {
        return view('livewire.contactos');
    }
}
