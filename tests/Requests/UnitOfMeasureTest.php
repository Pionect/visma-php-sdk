<?php

use Pionect\VismaSdk\Enums\CreateCurrencyRateMultDivEnum;
use Pionect\VismaSdk\Enums\UnitOfMeasureSupplementaryMeasureUnitEnum;
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
                'unitMultDiv' => 'Multiply',
                'unitRate' => 42,
                'supplementaryMeasureUnit' => 'None',
            ],
            1 => [
                'fromUnit' => 'String value',
                'toUnit' => 'String value',
                'unitMultDiv' => 'Multiply',
                'unitRate' => 42,
                'supplementaryMeasureUnit' => 'None',
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->fromUnit->toBe('String value')
        ->toUnit->toBe('String value')
        ->unitMultDiv->toEqual(CreateCurrencyRateMultDivEnum::MULTIPLY)
        ->unitRate->toBe(42)
        ->supplementaryMeasureUnit->toEqual(UnitOfMeasureSupplementaryMeasureUnitEnum::NONE);
});
