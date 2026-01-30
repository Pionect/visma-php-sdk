<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\SupplierAccount\SupplierAccountGetBysupplierIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierAccountGetBysupplierIdRequest method in the SupplierAccount resource', function () {
    Saloon::fake([
        SupplierAccountGetBysupplierIdRequest::class => MockResponse::make([
            'supplierAccount' => null,
            'supplierItemAccounts' => [],
        ], 200),
    ]);

    $request = new SupplierAccountGetBysupplierIdRequest(
        supplierId: 'test string',
        supplierItemId: [],
        vatRegistrationId: 'test string',
        linesNonTaxable: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierAccountGetBysupplierIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->supplierAccount->toBeNull();
});
