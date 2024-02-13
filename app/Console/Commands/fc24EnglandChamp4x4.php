<?php

namespace App\Console\Commands;

use App\Models\Matches;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class fc24EnglandChamp4x4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fc24EnglandChamp4x4:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client   = new \GuzzleHttp\Client;
        $request  = $client->get('https://1xbit1.com/LiveFeed/Get1x2_VZip?sports=85&champs=2648573&count=50&lng=en&gr=29&mode=4&country=124&partner=65&getEmpty=true');
        $response = $request->getBody()->getContents();
        $items    = json_decode($response, true);
        foreach ($items['Value'] as $item) {

//            foreach ($item['SC'] as $status){
//                Matches::create([
//                Matches::LEAGUE_ID => 1,
//                Matches::JSON      => $status['TS'],
//            ]);
//            }
//
        }
    }
}
