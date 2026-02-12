<?php

namespace App\Services;

use App\Models\Moto;
use App\Repositories\Interfaces\MotoRepositoryInterface;

class MotoService
{
    protected $motoRepository;

    public function __construct(MotoRepositoryInterface $motoRepository)
    {
        $this->motoRepository = $motoRepository;
    }

    public function getAll()
    {
        return $this->motoRepository->all();
    }

    public function create(array $data): Moto
    {
        return $this->motoRepository->create($data);
    }

    public function getById(Moto $moto): Moto
    {
        return $this->motoRepository->find($moto);
    }

    public function update(Moto $moto, array $data): Moto
    {
        return $this->motoRepository->update($moto, $data);
    }

    public function delete(Moto $moto): void
    {
        $this->motoRepository->delete($moto);
    }
}
