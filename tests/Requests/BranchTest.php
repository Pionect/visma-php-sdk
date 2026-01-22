<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Branch\BranchGetAllBranchesCollectionRequest;
use Pionect\VismaSdk\Requests\Branch\BranchGetSpecificBranchBybranchNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the branchGetSpecificBranchBybranchNumber method in the Branch resource', function () {
    Saloon::fake([
        BranchGetSpecificBranchBybranchNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'branches',
                'id' => 'mock-id-123',
                'attributes' => [
                    'branchId' => 42,
                    'number' => 'Mock value',
                    'name' => 'Mock value',
                    'organizationId' => 42,
                    'isMainBranch' => true,
                    'isActive' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'corporateId' => 'mock-id-123',
                    'vatRegistrationId' => 'mock-id-123',
                    'mainAddress' => 'Mock value',
                    'mainContact' => 'Mock value',
                    'deliveryAddress' => 'Mock value',
                    'deliveryContact' => 'Mock value',
                    'defaultCountry' => 'Mock value',
                    'industryCode' => 'Mock value',
                    'currency' => 'Mock value',
                    'vatZone' => 'Mock value',
                    'ledger' => 'Mock value',
                    'bankSettings' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new BranchGetSpecificBranchBybranchNumberRequest(
        branchNumberId: 'test string',
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
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBe(true)
        ->isActive->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->defaultCountry->toBe('Mock value')
        ->industryCode->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->ledger->toBe('Mock value')
        ->bankSettings->toBe('Mock value');
});

it('calls the branchGetAllBranchesCollection method in the Branch resource', function () {
    Saloon::fake([
        BranchGetAllBranchesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'branches',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'branchId' => 42,
                        'number' => 'Mock value',
                        'name' => 'Mock value',
                        'organizationId' => 42,
                        'isMainBranch' => true,
                        'isActive' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'corporateId' => 'mock-id-123',
                        'vatRegistrationId' => 'mock-id-123',
                        'mainAddress' => 'Mock value',
                        'mainContact' => 'Mock value',
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'defaultCountry' => 'Mock value',
                        'industryCode' => 'Mock value',
                        'currency' => 'Mock value',
                        'vatZone' => 'Mock value',
                        'ledger' => 'Mock value',
                        'bankSettings' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'branches',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'branchId' => 42,
                        'number' => 'Mock value',
                        'name' => 'Mock value',
                        'organizationId' => 42,
                        'isMainBranch' => true,
                        'isActive' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'corporateId' => 'mock-id-123',
                        'vatRegistrationId' => 'mock-id-123',
                        'mainAddress' => 'Mock value',
                        'mainContact' => 'Mock value',
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'defaultCountry' => 'Mock value',
                        'industryCode' => 'Mock value',
                        'currency' => 'Mock value',
                        'vatZone' => 'Mock value',
                        'ledger' => 'Mock value',
                        'bankSettings' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new BranchGetAllBranchesCollectionRequest(greaterThanValue: 'test string', orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAddress: true, expandContact: true, expandCurrency: true, expandVatZone: true, expandLedger: true, expandIndustryCode: true, expandDeliveryAddress: true, expandDeliveryContact: true, expandDefaultCountry: true, expandBankSettings: true));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (BranchGetAllBranchesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->branchId->toBe(42)
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBe(true)
        ->isActive->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->defaultCountry->toBe('Mock value')
        ->industryCode->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->ledger->toBe('Mock value')
        ->bankSettings->toBe('Mock value');
});
