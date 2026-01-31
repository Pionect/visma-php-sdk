<?php

use Pionect\VismaSdk\Dto\BankSettingsUpdateDto;
use Pionect\VismaSdk\Requests\Organization\OrganizationGetAllRequest;
use Pionect\VismaSdk\Requests\Organization\OrganizationGetByOrganizationCdByorganizationNumberRequest;
use Pionect\VismaSdk\Requests\Organization\OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the organizationGetByOrganizationCdByorganizationNumberRequest method in the Organization resource', function () {
    Saloon::fake([
        OrganizationGetByOrganizationCdByorganizationNumberRequest::class => MockResponse::make([
            'organizationCd' => 'String value',
            'name' => 'String value',
            'organizationType' => 'String value',
            'fileTaxByBranches' => true,
            'baseCurrency' => 'String value',
            'mainAddress' => [
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
            'mainContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'deliveryAddress' => [
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
            'deliveryContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'corporateId' => 'mock-id-123',
            'vatRegistrationId' => 'mock-id-123',
            'defaultCountry' => [
                'name' => 'String value',
                'errorInfo' => 'String value',
            ],
            'industryCode' => [
                'description' => 'String value',
            ],
            'currency' => [
                'description' => 'String value',
                'symbol' => 'String value',
                'isBaseCurrency' => true,
                'decimalPrecision' => 42,
                'isUsedForAccounting' => true,
            ],
            'vatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'ledger' => [
                'description' => 'String value',
            ],
            'bankSettings' => [
                'bankName' => 'String value',
                'bankAddress1' => 'String value',
                'bankAddress2' => 'String value',
                'bankAddress3' => 'String value',
                'bankCountry' => 'String value',
                'iban' => 'String value',
                'bban' => 'String value',
                'bbaN2' => 'String value',
                'bbaN3' => 'String value',
                'bic' => 'String value',
                'creditorId' => 'mock-id-123',
            ],
            'branches' => [],
            'timeStamp' => 'String value',
        ], 200),
    ]);

    $request = new OrganizationGetByOrganizationCdByorganizationNumberRequest(
        organizationNumber: 'test string',
        expandBranches: true,
        expandBankSettings: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        greaterThanValue: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(OrganizationGetByOrganizationCdByorganizationNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->organizationCd->toBe('String value')
        ->name->toBe('String value')
        ->organizationType->toBe('String value')
        ->fileTaxByBranches->toBe(true)
        ->baseCurrency->toBe('String value')
        ->mainAddress->addressId->toBe(42)
        ->mainAddress->addressLine1->toBe('String value')
        ->mainAddress->addressLine2->toBe('String value')
        ->mainAddress->addressLine3->toBe('String value')
        ->mainAddress->postalCode->toBe('String value')
        ->mainAddress->city->toBe('String value')
        ->mainAddress->country->name->toBe('String value')
        ->mainAddress->country->errorInfo->toBe('String value')
        ->mainAddress->county->name->toBe('String value')
        ->mainContact->contactId->toBe(42)
        ->mainContact->name->toBe('String value')
        ->mainContact->attention->toBe('String value')
        ->mainContact->email->toBe('test@example.com')
        ->mainContact->web->toBe('String value')
        ->mainContact->phone1->toBe('String value')
        ->mainContact->phone2->toBe('String value')
        ->mainContact->fax->toBe('String value')
        ->deliveryAddress->addressId->toBe(42)
        ->deliveryAddress->addressLine1->toBe('String value')
        ->deliveryAddress->addressLine2->toBe('String value')
        ->deliveryAddress->addressLine3->toBe('String value')
        ->deliveryAddress->postalCode->toBe('String value')
        ->deliveryAddress->city->toBe('String value')
        ->deliveryAddress->country->name->toBe('String value')
        ->deliveryAddress->country->errorInfo->toBe('String value')
        ->deliveryAddress->county->name->toBe('String value')
        ->deliveryContact->contactId->toBe(42)
        ->deliveryContact->name->toBe('String value')
        ->deliveryContact->attention->toBe('String value')
        ->deliveryContact->email->toBe('test@example.com')
        ->deliveryContact->web->toBe('String value')
        ->deliveryContact->phone1->toBe('String value')
        ->deliveryContact->phone2->toBe('String value')
        ->deliveryContact->fax->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->defaultCountry->name->toBe('String value')
        ->defaultCountry->errorInfo->toBe('String value')
        ->industryCode->description->toBe('String value')
        ->currency->description->toBe('String value')
        ->currency->symbol->toBe('String value')
        ->currency->isBaseCurrency->toBe(true)
        ->currency->decimalPrecision->toBe(42)
        ->currency->isUsedForAccounting->toBe(true)
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->ledger->description->toBe('String value')
        ->bankSettings->bankName->toBe('String value')
        ->bankSettings->bankAddress1->toBe('String value')
        ->bankSettings->bankAddress2->toBe('String value')
        ->bankSettings->bankAddress3->toBe('String value')
        ->bankSettings->bankCountry->toBe('String value')
        ->bankSettings->iban->toBe('String value')
        ->bankSettings->bban->toBe('String value')
        ->bankSettings->bbaN2->toBe('String value')
        ->bankSettings->bbaN3->toBe('String value')
        ->bankSettings->bic->toBe('String value')
        ->bankSettings->creditorId->toBe('mock-id-123')
        ->timeStamp->toBe('String value');
});

it('calls the organizationGetAllRequest method in the Organization resource', function () {
    Saloon::fake([
        OrganizationGetAllRequest::class => MockResponse::make([
            0 => [
                'organizationCd' => 'String value',
                'name' => 'String value',
                'organizationType' => 'String value',
                'fileTaxByBranches' => true,
                'baseCurrency' => 'String value',
                'mainAddress' => [
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
                'mainContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'deliveryAddress' => [
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
                'deliveryContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
                'defaultCountry' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'industryCode' => [
                    'description' => 'String value',
                ],
                'currency' => [
                    'description' => 'String value',
                    'symbol' => 'String value',
                    'isBaseCurrency' => true,
                    'decimalPrecision' => 42,
                    'isUsedForAccounting' => true,
                ],
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'ledger' => [
                    'description' => 'String value',
                ],
                'bankSettings' => [
                    'bankName' => 'String value',
                    'bankAddress1' => 'String value',
                    'bankAddress2' => 'String value',
                    'bankAddress3' => 'String value',
                    'bankCountry' => 'String value',
                    'iban' => 'String value',
                    'bban' => 'String value',
                    'bbaN2' => 'String value',
                    'bbaN3' => 'String value',
                    'bic' => 'String value',
                    'creditorId' => 'mock-id-123',
                ],
                'branches' => [],
                'timeStamp' => 'String value',
            ],
            1 => [
                'organizationCd' => 'String value',
                'name' => 'String value',
                'organizationType' => 'String value',
                'fileTaxByBranches' => true,
                'baseCurrency' => 'String value',
                'mainAddress' => [
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
                'mainContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'deliveryAddress' => [
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
                'deliveryContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
                'defaultCountry' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'industryCode' => [
                    'description' => 'String value',
                ],
                'currency' => [
                    'description' => 'String value',
                    'symbol' => 'String value',
                    'isBaseCurrency' => true,
                    'decimalPrecision' => 42,
                    'isUsedForAccounting' => true,
                ],
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'ledger' => [
                    'description' => 'String value',
                ],
                'bankSettings' => [
                    'bankName' => 'String value',
                    'bankAddress1' => 'String value',
                    'bankAddress2' => 'String value',
                    'bankAddress3' => 'String value',
                    'bankCountry' => 'String value',
                    'iban' => 'String value',
                    'bban' => 'String value',
                    'bbaN2' => 'String value',
                    'bbaN3' => 'String value',
                    'bic' => 'String value',
                    'creditorId' => 'mock-id-123',
                ],
                'branches' => [],
                'timeStamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new OrganizationGetAllRequest(
        expandBranches: true,
        expandBankSettings: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        greaterThanValue: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(OrganizationGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->organizationCd->toBe('String value')
        ->name->toBe('String value')
        ->organizationType->toBe('String value')
        ->fileTaxByBranches->toBe(true)
        ->baseCurrency->toBe('String value')
        ->mainAddress->addressId->toBe(42)
        ->mainAddress->addressLine1->toBe('String value')
        ->mainAddress->addressLine2->toBe('String value')
        ->mainAddress->addressLine3->toBe('String value')
        ->mainAddress->postalCode->toBe('String value')
        ->mainAddress->city->toBe('String value')
        ->mainAddress->country->name->toBe('String value')
        ->mainAddress->country->errorInfo->toBe('String value')
        ->mainAddress->county->name->toBe('String value')
        ->mainContact->contactId->toBe(42)
        ->mainContact->name->toBe('String value')
        ->mainContact->attention->toBe('String value')
        ->mainContact->email->toBe('test@example.com')
        ->mainContact->web->toBe('String value')
        ->mainContact->phone1->toBe('String value')
        ->mainContact->phone2->toBe('String value')
        ->mainContact->fax->toBe('String value')
        ->deliveryAddress->addressId->toBe(42)
        ->deliveryAddress->addressLine1->toBe('String value')
        ->deliveryAddress->addressLine2->toBe('String value')
        ->deliveryAddress->addressLine3->toBe('String value')
        ->deliveryAddress->postalCode->toBe('String value')
        ->deliveryAddress->city->toBe('String value')
        ->deliveryAddress->country->name->toBe('String value')
        ->deliveryAddress->country->errorInfo->toBe('String value')
        ->deliveryAddress->county->name->toBe('String value')
        ->deliveryContact->contactId->toBe(42)
        ->deliveryContact->name->toBe('String value')
        ->deliveryContact->attention->toBe('String value')
        ->deliveryContact->email->toBe('test@example.com')
        ->deliveryContact->web->toBe('String value')
        ->deliveryContact->phone1->toBe('String value')
        ->deliveryContact->phone2->toBe('String value')
        ->deliveryContact->fax->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->defaultCountry->name->toBe('String value')
        ->defaultCountry->errorInfo->toBe('String value')
        ->industryCode->description->toBe('String value')
        ->currency->description->toBe('String value')
        ->currency->symbol->toBe('String value')
        ->currency->isBaseCurrency->toBe(true)
        ->currency->decimalPrecision->toBe(42)
        ->currency->isUsedForAccounting->toBe(true)
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->ledger->description->toBe('String value')
        ->bankSettings->bankName->toBe('String value')
        ->bankSettings->bankAddress1->toBe('String value')
        ->bankSettings->bankAddress2->toBe('String value')
        ->bankSettings->bankAddress3->toBe('String value')
        ->bankSettings->bankCountry->toBe('String value')
        ->bankSettings->iban->toBe('String value')
        ->bankSettings->bban->toBe('String value')
        ->bankSettings->bbaN2->toBe('String value')
        ->bankSettings->bbaN3->toBe('String value')
        ->bankSettings->bic->toBe('String value')
        ->bankSettings->creditorId->toBe('mock-id-123')
        ->timeStamp->toBe('String value');
});

it('calls the organizationPutBankSettingsForOrganizationByorganizationNumberRequest method in the Organization resource', function () {
    $bodyData = new BankSettingsUpdateDto(
        bankName: 'String value',
        bankAddress1: 'String value',
        bankAddress2: 'String value',
        bankAddress3: 'String value',
        bankCountry: 'String value',
        iban: 'String value',
        bban: 'String value',
        bbaN2: 'String value',
        bbaN3: 'String value',
        bic: 'String value',
        creditorId: 'mock-id-123'
    );

    Saloon::fake([
        OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest(
        organizationNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest::class);

    expect($response->status())->toBe(201);
});
