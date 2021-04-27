<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gateball;

class Gateballs extends Component
{
    public $gateballs;
    public $isOpen = 0;
    public $postId,$nama,$umur,$no_hp,$jabatan;

    public function render()
    {
        $this->gateballs = Gateball::all();
        return view('livewire.gateball');
    }

    public function munculModal(){
        $this->isOpen = true;
    }

        public function tutupModal(){
        $this->isOpen = false;
    }

    public function store(){
        $this->validate(
            [
                'nama'=>'required',
                'umur' => 'required',
                'no_hp' => 'required',
                'jabatan' => 'required',
            ]
        );

        Gateball::updateOrCreate(['id'=> $this->postId], [
            'nama' => $this->nama,
            'umur' => $this->umur,
            'no_hp' => $this->no_hp,
            'jabatan' => $this->jabatan

        ]);
            $this->tutupModal();

            session()->flash('info',$this->postId ? 'Post Update Success' : 'Post Created Success');

            $this->postId='';
            $this->nama='';
            $this->umur='';
            $this->no_hp='';
            $this->jabatan='';

    }

    public function edit($id){
        $gateballs =Gateball::findOrFail($id);
        $this -> postId = $id;
        $this -> nama = $gateballs->nama;
        $this -> umur = $gateballs->umur;
        $this -> no_hp = $gateballs->no_hp;
        $this -> jabatan = $gateballs->jabatan;

        
        $this->munculModal();
    }

    public function delete($id){
        Gateball::find($id)->delete();
    }


}
