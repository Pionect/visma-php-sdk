<?php

// auto-generated

use Pionect\VismaSdk\Requests\SupplierAccount\SupplierAccountGetBysupplierIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierAccountGetBysupplierId method in the SupplierAccount resource', function () {
    Saloon::fake([
        SupplierAccountGetBysupplierIdRequest::class => MockResponse::make([
            'supplierAccount' => null,
            'supplierItemAccounts' => [],
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierAccountGetBysupplierIdRequest(
        supplierIdId: 'test string',
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
        ->supplierAccount->toBeNull()
        ->id->toBe('mock-id-123');
});
