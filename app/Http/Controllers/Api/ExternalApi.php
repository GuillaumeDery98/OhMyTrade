<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ExternalApiRepository;

class ExternalApi extends Controller
{
    private $externalApiRepository;

    public function __construct(ExternalApiRepository $externalApiRepository)
    {
        $this->externalApiRepository = $externalApiRepository;
    }

    public function getRibbonPrices()
    {
        return $this->externalApiRepository->getRibbonPrices();
    }
}
