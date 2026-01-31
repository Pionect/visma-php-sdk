<?php

use Pionect\VismaSdk\Dto\SupplierLocationUpdateDto;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationCreateRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsForBaccountBybAccountIdRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationUpdateBybAccountIdlocationIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierLocationGetLocationBybAccountIdlocationIdRequest method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
            'baccount' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'active' => true,
            'address' => [
                'addressId' => 42,
                'addressLine1' => 'String value',
                'addressLine2' => 'String value',
                'addressLine3' => 'String value',
                'postalCode' => 'String value',
                'city' => 'String value',
                'country' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'county' => [
                    'name' => 'String value',
                ],
            ],
            'contact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'ediCode' => 'String value',
            'gln' => 'String value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->internalId->toBe(42)
        ->baccount->number->toBe('String value')
        ->baccount->name->toBe('String value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBe(true)
        ->address->addressId->toBe(42)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->addressLine3->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->name->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierLocationUpdateBybAccountIdlocationIdRequest method in the SupplierLocation resource', function () {
    $bodyData = new SupplierLocationUpdateDto(
        baccountId: 'mock-id-123',
        locationId: 'mock-id-123',
        locationName: 'String value',
        active: true,
        addressIsSameAsMain: true,
        address: null,
        contactIsSameAsMain: true,
        contact: null,
        vatRegistrationId: 'mock-id-123',
        vatZone: 'String value',
        ediCode: 'String value',
        gln: 'String value',
        corporateId: 'mock-id-123'
    );

    Saloon::fake([
        SupplierLocationUpdateBybAccountIdlocationIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierLocationUpdateBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationUpdateBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierLocationGetLocationsForBaccountBybAccountIdRequest method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
            'baccount' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'active' => true,
            'address' => [
                'addressId' => 42,
                'addressLine1' => 'String value',
                'addressLine2' => 'String value',
                'addressLine3' => 'String value',
                'postalCode' => 'String value',
                'city' => 'String value',
                'country' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'county' => [
                    'name' => 'String value',
                ],
            ],
            'contact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'ediCode' => 'String value',
            'gln' => 'String value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        gln: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->internalId->toBe(42)
        ->baccount->number->toBe('String value')
        ->baccount->name->toBe('String value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBe(true)
        ->address->addressId->toBe(42)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->addressLine3->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->name->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierLocationGetLocationsRequest method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsRequest::class => MockResponse::make([
            0 => [
                'baccount' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'locationId' => 'mock-id-123',
                'locationName' => 'String value',
                'active' => true,
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'contact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'ediCode' => 'String value',
                'gln' => 'String value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'baccount' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'locationId' => 'mock-id-123',
                'locationName' => 'String value',
                'active' => true,
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'contact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'ediCode' => 'String value',
                'gln' => 'String value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationsRequest(
        locationId: 'test string',
        gln: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->baccount->internalId->toBe(42)
        ->baccount->number->toBe('String value')
        ->baccount->name->toBe('String value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBe(true)
        ->address->addressId->toBe(42)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->addressLine3->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->name->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierLocationCreateRequest method in the SupplierLocation resource', function () {
    $bodyData = new SupplierLocationUpdateDto(
        baccountId: 'mock-id-123',
        locationId: 'mock-id-123',
        locationName: 'String value',
        active: true,
        addressIsSameAsMain: true,
        address: null,
        contactIsSameAsMain: true,
        contact: null,
        vatRegistrationId: 'mock-id-123',
        vatZone: 'String value',
        ediCode: 'String value',
        gln: 'String value',
        corporateId: 'mock-id-123'
    );

    Saloon::fake([
        SupplierLocationCreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierLocationCreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationCreateRequest::class);

    expect($response->status())->toBe(201);
});
