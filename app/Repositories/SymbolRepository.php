<?php

namespace App\Repositories;

use Blok\Repository\AbstractEloquentRepository;

class SymbolRepository extends AbstractEloquentRepository
{
    public function model()
    {
        return \App\Models\Symbol::class;
    }

    public function create(array $data)
    {
        $model = $this->model();
    }
}
