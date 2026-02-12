<?php

namespace App\Repositories\Interfaces;

use App\Models\Moto;

interface MotoRepositoryInterface
{
    public function all();
    public function find(Moto $moto): Moto;
    public function create(array $data): Moto;
    public function update(Moto $moto, array $data): Moto;
    public function delete(Moto $moto): void;
}
