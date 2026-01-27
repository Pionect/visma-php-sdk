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
            0 => [
                'fromUnit' => 'String value',
                'toUnit' => 'String value',
                'unitMultDiv' => 'String value',
                'unitRate' => 3.14,
                'supplementaryMeasureUnit' => 'String value',
                'id' => 'mock-id-123',
            ],
            1 => [
                'fromUnit' => 'String value',
                'toUnit' => 'String value',
                'unitMultDiv' => 'String value',
                'unitRate' => 3.14,
                'supplementaryMeasureUnit' => 'String value',
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new UnitOfMeasureGetAllUnitsOfMeasureCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (UnitOfMeasureGetAllUnitsOfMeasureCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->fromUnit->toBe('String value')
        ->toUnit->toBe('String value')
        ->unitMultDiv->toBe('String value')
        ->unitRate->toBe(3.14)
        ->supplementaryMeasureUnit->toBe('String value')
        ->id->toBe('mock-id-123');
});
