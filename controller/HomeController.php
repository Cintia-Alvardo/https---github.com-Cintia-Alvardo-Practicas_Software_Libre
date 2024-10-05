<?php

class HomeController extends BaseController 
{
    public function index() 
    {
        $data = [
            "nombre" => "Cintia Alvarado",
            "edad" => "20",
            "items" => [
                'item 1',
                'item 2',
                'item 3',
                'item 4',
                'item 5'
            ]
        ];

    
        return $this->view('home/home', $data);
        

    }
}
