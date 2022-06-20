<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use Blok\Repository\AbstractEloquentRepository;

class ExternalApiRepository extends AbstractEloquentRepository
{
    public function model()
    {
        return \App\Models\User::class;
    }

    public function getRibbonPrices()
    {
        return json_decode(Http::withHeaders([
            'X-CMC_PRO_API_KEY' => env('COINMARKETCAP_API')
        ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', [
            'limit' => 10,
            'cryptocurrency_type' => 'coins'
        ])->body(), true)['data'];
    }
}
