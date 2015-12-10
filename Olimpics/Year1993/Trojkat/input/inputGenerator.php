<?php

namespace Olimpics\Year1993\Trojkat\Input;

class InputGenerator
{

    public function __construct()
    {
        //Select default iteration
        $this->iteration = rand(3, 9 * pow(10, 2));
        $this->myFile = 'tkt.in';
        $this->fh = fopen($this->myFile, 'w');
    }
    
    protected function generateData(){
        $count = rand(1, 9999);
        $denom = rand(1, 9999);
        $data = strval($count) . '/' . strval($denom);
        return $data;
    }
    
    public function generate(){
        $data = $this->generateData();
        fwrite($this->fh, $data);
        for ($i = 1; $i < $this->iteration; $i++) {
            $data = $this->generateData();
            fwrite($this->fh, ' ' . $data);
            if($i % 10 === 0){
                fwrite($this->fh, "\n");
            }
        }
    }

}

$inputGen = new InputGenerator();
$inputGen->generate();





?>
