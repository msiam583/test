<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class FormBooking extends Component
{
    use LivewireAlert;

    public $date, $time ,$address2,$name2,$phone,$description;
    
   
    public function restInput(){
        $this->date=null;
        $this->time=null;
        $this->name2=null;
        $this->address2=null;
    }
    public function rules(){
        
        return[
        'date'=>'required|string',
        'time'=>'required|string',
        'name2'=>'required|string',
        'phone'=>'required|string',
        'address2'=>'required|string',
        'description'=>'required|string',
        ];
    }
    public function continueSession(){
        $this->validate([
            'date'=>'required|string',
            'time'=>'required|string',
        ]);
        session()->flash('date', 'Post successfully updated.');

    }
    public function save(){
        $this->validate([
            'name2'=>'required|string',
            'address2'=>'required|string',
            'phone'=>'required|string',
            'phone'=>'required|string',
        ]);
   
        $booking=Booking::create([
            'date'=>$this->date,
            'time'=>$this->time,
            'name'=>$this->name2,
            'phone'=>$this->phone,
            'address'=>$this->address2,
            'description'=>$this->description,
        ]);
        $this->restInput();
        $this->alert('success', 'Created Successful');

        

    }

    public function render()
    {
        return view('livewire.form-booking');
    }
}
