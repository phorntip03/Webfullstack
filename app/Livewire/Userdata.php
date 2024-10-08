<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\User;

class Userdata extends Component
{
    public function render()
    {
        //ดึงข้อมูลทั้งหมดจาก User เก็บใส่ตัวแปร data
        $data = User::all();
         //withcompact คือทุกครั้งที่มีการ rander ใหม่ ให้ส่งตัวแปร data ไปที่หน้า view ด้วย
        return view('livewire.userdata')->with(compact('data'));
    }
}
