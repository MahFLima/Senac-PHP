<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function aula01() : string
    {
        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nihil
            reiciendis qui consectetur illo asperiores, blanditiis deserunt provident
            excepturi natus nesciunt non quis praesentium eveniet, dignissimos
            dolorum. Corrupti, nemo numquam.',
            'todo_list' => ['Clean House', 'Call Mom', 'Run Errands']
        ];
        return view('aula01', $data);
    }

    
}
