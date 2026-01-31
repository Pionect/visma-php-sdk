<?php

use Pionect\VismaSdk\Dto\BankSettingsUpdateDto;
use Pionect\VismaSdk\Requests\Branch\BranchGetAllBranchesRequest;
use Pionect\VismaSdk\Requests\Branch\BranchGetSpecificBranchBybranchNumberRequest;
use Pionect\VismaSdk\Requests\Branch\BranchPutBankSettingsForBranchBybranchNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the branchGetSpecificBranchBybranchNumberRequest method in the Branch resource', function () {
    Saloon::fake([
        BranchGetSpecificBranchBybranchNumberRequest::class => MockResponse::make([
            'branchId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'organizationId' => 42,
            'isMainBranch' => true,
            'isActive' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'corporateId' => 'mock-id-123',
            'vatRegistrationId' => 'mock-id-123',
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
            ],
            'vatZone' => [
                'description' => 'String value',
            ],
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
        ], 200),
    ]);

    $request = new BranchGetSpecificBranchBybranchNumberRequest(
        branchNumber: 'test string',
        expandAddress: true,
        expandContact: true,
        expandCurrency: true,
        expandVatZone: true,
        expandLedger: true,
        expandIndustryCode: true,
        expandDeliveryAddress: true,
        expandDeliveryContact: true,
        expandDefaultCountry: true,
        expandBankSettings: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BranchGetSpecificBranchBybranchNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->branchId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBe(true)
        ->isActive->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
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
        ->defaultCountry->name->toBe('String value')
        ->defaultCountry->errorInfo->toBe('String value')
        ->industryCode->description->toBe('String value')
        ->currency->description->toBe('String value')
        ->currency->symbol->toBe('String value')
        ->vatZone->description->toBe('String value')
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
        ->bankSettings->creditorId->toBe('mock-id-123');
});

it('calls the branchGetAllBranchesRequest method in the Branch resource', function () {
    Saloon::fake([
        BranchGetAllBranchesRequest::class => MockResponse::make([
            0 => [
                'branchId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'organizationId' => 42,
                'isMainBranch' => true,
                'isActive' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
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
                ],
                'vatZone' => [
                    'description' => 'String value',
                ],
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
            ],
            1 => [
                'branchId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'organizationId' => 42,
                'isMainBranch' => true,
                'isActive' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
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
                ],
                'vatZone' => [
                    'description' => 'String value',
                ],
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
            ],
        ], 200),
    ]);

    $request = new BranchGetAllBranchesRequest(
        greaterThanValue: 'test string',
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expandAddress: true,
        expandContact: true,
        expandCurrency: true,
        expandVatZone: true,
        expandLedger: true,
        expandIndustryCode: true,
        expandDeliveryAddress: true,
        expandDeliveryContact: true,
        expandDefaultCountry: true,
        expandBankSettings: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BranchGetAllBranchesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->branchId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBe(true)
        ->isActive->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
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
        ->defaultCountry->name->toBe('String value')
        ->defaultCountry->errorInfo->toBe('String value')
        ->industryCode->description->toBe('String value')
        ->currency->description->toBe('String value')
        ->currency->symbol->toBe('String value')
        ->vatZone->description->toBe('String value')
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
        ->bankSettings->creditorId->toBe('mock-id-123');
});

it('calls the branchPutBankSettingsForBranchBybranchNumberRequest method in the Branch resource', function () {
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
        BranchPutBankSettingsForBranchBybranchNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new BranchPutBankSettingsForBranchBybranchNumberRequest(
        branchNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BranchPutBankSettingsForBranchBybranchNumberRequest::class);

    expect($response->status())->toBe(201);
});
