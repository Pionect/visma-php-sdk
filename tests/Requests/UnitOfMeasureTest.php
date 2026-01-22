<?php

// auto-generated

use Pionect\VismaSdk\Requests\UnitOfMeasure\UnitOfMeasureGetAllUnitsOfMeasureCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the unitOfMeasureGetAllUnitsOfMeasureCollection method in the UnitOfMeasure resource', function () {
    Saloon::fake([
        UnitOfMeasureGetAllUnitsOfMeasureCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'unitOfMeasures',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'fromUnit' => 'Mock value',
                        'toUnit' => 'Mock value',
                        'unitMultDiv' => 'Mock value',
                        'unitRate' => 3.14,
                        'supplementaryMeasureUnit' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'unitOfMeasures',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'fromUnit' => 'Mock value',
                        'toUnit' => 'Mock value',
                        'unitMultDiv' => 'Mock value',
                        'unitRate' => 3.14,
                        'supplementaryMeasureUnit' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new UnitOfMeasureGetAllUnitsOfMeasureCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (UnitOfMeasureGetAllUnitsOfMeasureCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->fromUnit->toBe('Mock value')
        ->toUnit->toBe('Mock value')
        ->unitMultDiv->toBe('Mock value')
        ->unitRate->toBe(3.14)
        ->supplementaryMeasureUnit->toBe('Mock value');
});
