<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\BranchDto;
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
            'mainAddress' => null,
            'mainContact' => null,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'defaultCountry' => null,
            'industryCode' => null,
            'currency' => null,
            'vatZone' => null,
            'ledger' => null,
            'bankSettings' => null,
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
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->defaultCountry->toBeNull()
        ->industryCode->toBeNull()
        ->currency->toBeNull()
        ->vatZone->toBeNull()
        ->ledger->toBeNull()
        ->bankSettings->toBeNull();
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
                'mainAddress' => null,
                'mainContact' => null,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'defaultCountry' => null,
                'industryCode' => null,
                'currency' => null,
                'vatZone' => null,
                'ledger' => null,
                'bankSettings' => null,
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
                'mainAddress' => null,
                'mainContact' => null,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'defaultCountry' => null,
                'industryCode' => null,
                'currency' => null,
                'vatZone' => null,
                'ledger' => null,
                'bankSettings' => null,
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

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->branchId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBe(true)
        ->isActive->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->defaultCountry->toBeNull()
        ->industryCode->toBeNull()
        ->currency->toBeNull()
        ->vatZone->toBeNull()
        ->ledger->toBeNull()
        ->bankSettings->toBeNull();
});

it('calls the branchPutBankSettingsForBranchBybranchNumberRequest method in the Branch resource', function () {
    $bodyData = new BranchDto(
        branchId: 42,
        number: 'String value',
        name: 'String value',
        organizationId: 42,
        isMainBranch: true,
        isActive: true,
        lastModifiedDateTime: '2025-11-22T10:40:04+00:00',
        corporateId: 'mock-id-123',
        vatRegistrationId: 'mock-id-123',
        mainAddress: null,
        mainContact: null,
        deliveryAddress: null,
        deliveryContact: null,
        defaultCountry: null,
        industryCode: null,
        currency: null,
        vatZone: null,
        ledger: null,
        bankSettings: null
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
