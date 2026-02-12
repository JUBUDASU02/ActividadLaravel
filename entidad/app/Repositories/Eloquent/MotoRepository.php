<?php

namespace App\Repositories\Eloquent;

use App\Models\Moto;
use App\Repositories\Interfaces\MotoRepositoryInterface;

class MotoRepository implements MotoRepositoryInterface
{
    public function all()
    {
        return Moto::all();
    }

    public function find(Moto $moto): Moto
    {
        return $moto;
    }

    public function create(array $data): Moto
    {
        return Moto::create($data);
    }

    public function update(Moto $moto, array $data): Moto
    {
        $moto->update($data);
        return $moto;
    }

    public function delete(Moto $moto): void
    {
        $moto->delete();
    }
}
