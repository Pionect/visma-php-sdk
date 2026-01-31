<?php

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
                'branch' => 'String value',
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'beginBalance' => 42,
                'purchases' => 42,
                'paymentsAndPrepayments' => 42,
                'adjustmentsAndDiscounts' => 42,
                'yearToDateBalance' => 42,
            ],
            1 => [
                'branch' => 'String value',
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'beginBalance' => 42,
                'purchases' => 42,
                'paymentsAndPrepayments' => 42,
                'adjustmentsAndDiscounts' => 42,
                'yearToDateBalance' => 42,
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->branch->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->beginBalance->toBe(42)
        ->purchases->toBe(42)
        ->paymentsAndPrepayments->toBe(42)
        ->adjustmentsAndDiscounts->toBe(42)
        ->yearToDateBalance->toBe(42);
});
