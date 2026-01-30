<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\FinancialPeriod\FinancialPeriodGetAllRequest;
use Pionect\VismaSdk\Requests\FinancialPeriod\FinancialPeriodGetByfinancialPeriodIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the financialPeriodGetAllRequest method in the FinancialPeriod resource', function () {
    Saloon::fake([
        FinancialPeriodGetAllRequest::class => MockResponse::make([
            0 => [
                'year' => 42,
                'period' => 'String value',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
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
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
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

    $request = new FinancialPeriodGetAllRequest(
        greaterThanValue: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FinancialPeriodGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->year->toBe(42)
        ->period->toBe('String value')
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->active->toBe(true)
        ->closedInSupplierLedger->toBe(true)
        ->closedInCustomerLedger->toBe(true)
        ->closedInInventoryManagement->toBe(true)
        ->closedInGeneralLedger->toBe(true)
        ->closedInCashManagement->toBe(true)
        ->closedInFixedAssets->toBe(true);
});

it('calls the financialPeriodGetByfinancialPeriodIdRequest method in the FinancialPeriod resource', function () {
    Saloon::fake([
        FinancialPeriodGetByfinancialPeriodIdRequest::class => MockResponse::make([
            'year' => 42,
            'period' => 'String value',
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
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
        financialPeriodId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FinancialPeriodGetByfinancialPeriodIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->year->toBe(42)
        ->period->toBe('String value')
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->active->toBe(true)
        ->closedInSupplierLedger->toBe(true)
        ->closedInCustomerLedger->toBe(true)
        ->closedInInventoryManagement->toBe(true)
        ->closedInGeneralLedger->toBe(true)
        ->closedInCashManagement->toBe(true)
        ->closedInFixedAssets->toBe(true);
});
