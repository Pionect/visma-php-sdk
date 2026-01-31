<?php

use Pionect\VismaSdk\Dto\LocationUpdateDto;
use Pionect\VismaSdk\Requests\Location\LocationCreateRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsForBaccountBybAccountIdRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsRequest;
use Pionect\VismaSdk\Requests\Location\LocationUpdateBybAccountIdlocationIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the locationGetLocationBybAccountIdlocationIdRequest method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
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
            'peppolScheme' => [
                'endpoint' => 'String value',
                'partyIdentification' => 'String value',
                'partyLegal' => 'String value',
            ],
            'internalId' => 42,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new LocationGetLocationBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationGetLocationBybAccountIdlocationIdRequest::class);

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
        ->peppolScheme->endpoint->toBe('String value')
        ->peppolScheme->partyIdentification->toBe('String value')
        ->peppolScheme->partyLegal->toBe('String value')
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the locationUpdateBybAccountIdlocationIdRequest method in the Location resource', function () {
    $bodyData = new LocationUpdateDto(
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
        corporateId: 'mock-id-123',
        peppolScheme: null
    );

    Saloon::fake([
        LocationUpdateBybAccountIdlocationIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new LocationUpdateBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationUpdateBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the locationGetLocationsForBaccountBybAccountIdRequest method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
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
            'peppolScheme' => [
                'endpoint' => 'String value',
                'partyIdentification' => 'String value',
                'partyLegal' => 'String value',
            ],
            'internalId' => 42,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new LocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        gln: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationGetLocationsForBaccountBybAccountIdRequest::class);

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
        ->peppolScheme->endpoint->toBe('String value')
        ->peppolScheme->partyIdentification->toBe('String value')
        ->peppolScheme->partyLegal->toBe('String value')
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the locationGetLocationsRequest method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsRequest::class => MockResponse::make([
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
                'peppolScheme' => [
                    'endpoint' => 'String value',
                    'partyIdentification' => 'String value',
                    'partyLegal' => 'String value',
                ],
                'internalId' => 42,
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
                'peppolScheme' => [
                    'endpoint' => 'String value',
                    'partyIdentification' => 'String value',
                    'partyLegal' => 'String value',
                ],
                'internalId' => 42,
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new LocationGetLocationsRequest(
        locationId: 'test string',
        gln: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationGetLocationsRequest::class);

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
        ->peppolScheme->endpoint->toBe('String value')
        ->peppolScheme->partyIdentification->toBe('String value')
        ->peppolScheme->partyLegal->toBe('String value')
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the locationCreateRequest method in the Location resource', function () {
    $bodyData = new LocationUpdateDto(
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
        corporateId: 'mock-id-123',
        peppolScheme: null
    );

    Saloon::fake([
        LocationCreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new LocationCreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationCreateRequest::class);

    expect($response->status())->toBe(201);
});
