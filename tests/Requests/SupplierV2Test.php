<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\SupplierV2\SupplierV2GetAllSupplierBalanceRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierV2getAllSupplierBalanceRequest method in the SupplierV2 resource', function () {
    Saloon::fake([
        SupplierV2GetAllSupplierBalanceRequest::class => MockResponse::make([
            0 => [
                'name' => 'Mock value',
            ],
            1 => [
                'name' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = new SupplierV2GetAllSupplierBalanceRequest(
        branch: 'test string',
        supplier: 'test string',
        fromFinPeriod: 'test string',
        toFinPeriod: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierV2GetAllSupplierBalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->name->toBe('Mock value');
});
