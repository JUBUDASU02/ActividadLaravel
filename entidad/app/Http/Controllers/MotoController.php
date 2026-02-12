<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Services\MotoService;
use App\Http\Requests\StoreMotoRequest;
use App\Http\Requests\UpdateMotoRequest;

class MotoController extends Controller
{
    protected $motoService;

    public function __construct(MotoService $motoService)
    {
        $this->motoService = $motoService;
    }

    public function index()
    {
        return response()->json($this->motoService->getAll());
    }

    public function store(StoreMotoRequest $request)
    {
        $moto = $this->motoService->create($request->validated());
        return response()->json($moto, 201);
    }

    public function show(Moto $moto)
    {
        return response()->json($this->motoService->getById($moto));
    }

    public function update(UpdateMotoRequest $request, Moto $moto)
    {
        $moto = $this->motoService->update($moto, $request->validated());
        return response()->json($moto);
    }

    public function destroy(Moto $moto)
    {
        $this->motoService->delete($moto);
        return response()->json(null, 204);
    }
}
