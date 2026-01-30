<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\UnitOfMeasure\UnitOfMeasureGetAllUnitsOfMeasureRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the unitOfMeasureGetAllUnitsOfMeasureRequest method in the UnitOfMeasure resource', function () {
    Saloon::fake([
        UnitOfMeasureGetAllUnitsOfMeasureRequest::class => MockResponse::make([
            0 => [
                'fromUnit' => 'String value',
                'toUnit' => 'String value',
                'unitMultDiv' => 'String value',
                'unitRate' => 42,
                'supplementaryMeasureUnit' => 'String value',
            ],
            1 => [
                'fromUnit' => 'String value',
                'toUnit' => 'String value',
                'unitMultDiv' => 'String value',
                'unitRate' => 42,
                'supplementaryMeasureUnit' => 'String value',
            ],
        ], 200),
    ]);

    $request = new UnitOfMeasureGetAllUnitsOfMeasureRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(UnitOfMeasureGetAllUnitsOfMeasureRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->fromUnit->toBe('String value')
        ->toUnit->toBe('String value')
        ->unitMultDiv->toBe('String value')
        ->unitRate->toBe(42)
        ->supplementaryMeasureUnit->toBe('String value');
});
