<?php

use Pionect\VismaSdk\Requests\SupplierAccount\SupplierAccountGetBysupplierIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierAccountGetBysupplierIdRequest method in the SupplierAccount resource', function () {
    Saloon::fake([
        SupplierAccountGetBysupplierIdRequest::class => MockResponse::make([
            'supplierAccount' => [
                'number' => 'String value',
                'name' => 'String value',
                'accountId' => 'mock-id-123',
                'subaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
            ],
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
        ->supplierAccount->number->toBe('String value')
        ->supplierAccount->name->toBe('String value')
        ->supplierAccount->accountId->toBe('mock-id-123')
        ->supplierAccount->subaccount->subaccountNumber->toBe('String value')
        ->supplierAccount->subaccount->subaccountId->toBe(42)
        ->supplierAccount->subaccount->description->toBe('String value')
        ->supplierAccount->subaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->supplierAccount->subaccount->active->toBe(true)
        ->supplierAccount->subaccount->timeStamp->toBe('String value')
        ->supplierAccount->subaccount->errorInfo->toBe('String value');
});
