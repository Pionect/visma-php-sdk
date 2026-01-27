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
            0 => [
                'year' => 42,
                'period' => 'String value',
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'active' => true,
                'closedInSupplierLedger' => true,
                'closedInCustomerLedger' => true,
                'closedInInventoryManagement' => true,
                'closedInGeneralLedger' => true,
                'closedInCashManagement' => true,
                'closedInFixedAssets' => true,
            ],
            1 => [
                'year' => 42,
                'period' => 'String value',
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'active' => true,
                'closedInSupplierLedger' => true,
                'closedInCustomerLedger' => true,
                'closedInInventoryManagement' => true,
                'closedInGeneralLedger' => true,
                'closedInCashManagement' => true,
                'closedInFixedAssets' => true,
            ],
        ], 200),
    ]);

    $request = (new FinancialPeriodGetAllCollectionRequest(greaterThanValue: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (FinancialPeriodGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->year->toBe(42)
        ->period->toBe('String value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->closedInSupplierLedger->toBeTrue()
        ->closedInCustomerLedger->toBeTrue()
        ->closedInInventoryManagement->toBeTrue()
        ->closedInGeneralLedger->toBeTrue()
        ->closedInCashManagement->toBeTrue()
        ->closedInFixedAssets->toBeTrue();
});

it('calls the financialPeriodGetByfinancialPeriodId method in the FinancialPeriod resource', function () {
    Saloon::fake([
        FinancialPeriodGetByfinancialPeriodIdRequest::class => MockResponse::make([
            'year' => 42,
            'period' => 'String value',
            'startDate' => '2025-11-22T10:40:04.065Z',
            'endDate' => '2025-11-22T10:40:04.065Z',
            'description' => 'String value',
            'active' => true,
            'closedInSupplierLedger' => true,
            'closedInCustomerLedger' => true,
            'closedInInventoryManagement' => true,
            'closedInGeneralLedger' => true,
            'closedInCashManagement' => true,
            'closedInFixedAssets' => true,
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
        ->period->toBe('String value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->closedInSupplierLedger->toBeTrue()
        ->closedInCustomerLedger->toBeTrue()
        ->closedInInventoryManagement->toBeTrue()
        ->closedInGeneralLedger->toBeTrue()
        ->closedInCashManagement->toBeTrue()
        ->closedInFixedAssets->toBeTrue();
});
