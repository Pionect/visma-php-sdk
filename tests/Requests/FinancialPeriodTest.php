<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\FinancialPeriod\FinancialPeriodGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FinancialPeriod\FinancialPeriodGetByfinancialPeriodIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the financialPeriodGetAllCollection method in the FinancialPeriod resource', function () {
    Saloon::fake([
        FinancialPeriodGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'financialPeriods',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'year' => 42,
                        'period' => 'Mock value',
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'description' => 'Mock value',
                        'active' => true,
                        'closedInSupplierLedger' => true,
                        'closedInCustomerLedger' => true,
                        'closedInInventoryManagement' => true,
                        'closedInGeneralLedger' => true,
                        'closedInCashManagement' => true,
                        'closedInFixedAssets' => true,
                    ],
                ],
                1 => [
                    'type' => 'financialPeriods',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'year' => 42,
                        'period' => 'Mock value',
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'description' => 'Mock value',
                        'active' => true,
                        'closedInSupplierLedger' => true,
                        'closedInCustomerLedger' => true,
                        'closedInInventoryManagement' => true,
                        'closedInGeneralLedger' => true,
                        'closedInCashManagement' => true,
                        'closedInFixedAssets' => true,
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new FinancialPeriodGetAllCollectionRequest(greaterThanValue: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (FinancialPeriodGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->year->toBe(42)
        ->period->toBe('Mock value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->active->toBe(true)
        ->closedInSupplierLedger->toBe(true)
        ->closedInCustomerLedger->toBe(true)
        ->closedInInventoryManagement->toBe(true)
        ->closedInGeneralLedger->toBe(true)
        ->closedInCashManagement->toBe(true)
        ->closedInFixedAssets->toBe(true);
});

it('calls the financialPeriodGetByfinancialPeriodId method in the FinancialPeriod resource', function () {
    Saloon::fake([
        FinancialPeriodGetByfinancialPeriodIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'financialPeriods',
                'id' => 'mock-id-123',
                'attributes' => [
                    'year' => 42,
                    'period' => 'Mock value',
                    'startDate' => '2025-11-22T10:40:04.065Z',
                    'endDate' => '2025-11-22T10:40:04.065Z',
                    'description' => 'Mock value',
                    'active' => true,
                    'closedInSupplierLedger' => true,
                    'closedInCustomerLedger' => true,
                    'closedInInventoryManagement' => true,
                    'closedInGeneralLedger' => true,
                    'closedInCashManagement' => true,
                    'closedInFixedAssets' => true,
                ],
            ],
        ], 200),
    ]);

    $request = new FinancialPeriodGetByfinancialPeriodIdRequest(
        financialPeriodIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FinancialPeriodGetByfinancialPeriodIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->year->toBe(42)
        ->period->toBe('Mock value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->active->toBe(true)
        ->closedInSupplierLedger->toBe(true)
        ->closedInCustomerLedger->toBe(true)
        ->closedInInventoryManagement->toBe(true)
        ->closedInGeneralLedger->toBe(true)
        ->closedInCashManagement->toBe(true)
        ->closedInFixedAssets->toBe(true);
});
