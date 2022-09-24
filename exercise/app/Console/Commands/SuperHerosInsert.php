<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\SuperHero;
use App;

class SuperHerosInsert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'superheros:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loads superhero data from the csv';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
         $f = fopen(public_path('csv/superheros.csv'), 'r');
        
        fgets($f); 

         
        while (($data = fgetcsv($f)) !== false) 
        {

        $chunkData = array_chunk($data, 1000);
        if (isset($chunkData) && !empty($chunkData) &&  (count($data)==16)) {
        App\SuperHero::create([
                'id'            => $data[0],
                'name'          => $data[1], 
                'fullName'      => $data[2], 
                'strength'      => $data[3],
                'speed'         => $data[4], 
                'durability'    => $data[5], 
                'power'         => $data[6],
                'combat'        => $data[7], 
                'race'          => $data[8], 
                'height/0'      => $data[9],
                'height/1'      => $data[10],
                'weight/0'      => $data[11], 
                'weight/1'      => $data[12], 
                'eyeColor'      => $data[13],
                'hairColor'     => $data[14], 
                'publisher'     => $data[15],
                                ]);

             $this->info('Id '.$data[0].' imported successfully');
        }

        else{
            $this->error('Id '.$data[0].' not loaded correctly');

        }
    }

        return 0;
    }
}
