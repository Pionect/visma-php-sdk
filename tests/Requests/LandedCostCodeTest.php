<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\LandedCostCode\LandedCostCodeGetAllLandedCostsBycodeRequest;
use Pionect\VismaSdk\Requests\LandedCostCode\LandedCostCodeGetAllLandedCostsRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the landedCostCodeGetAllLandedCostsBycodeRequest method in the LandedCostCode resource', function () {
    Saloon::fake([
        LandedCostCodeGetAllLandedCostsBycodeRequest::class => MockResponse::make([
            'landedCostCodeId' => 'mock-id-123',
            'description' => 'String value',
            'landedCostType' => 'String value',
            'applicationMethod' => 'String value',
            'allocationMethod' => 'String value',
            'supplierId' => 'mock-id-123',
            'supplierLocationId' => 'mock-id-123',
            'terms' => 'String value',
            'reasonCode' => 'String value',
            'landedCostAccrualAccount' => 'String value',
            'landedCostAccrualSubaccount' => 'String value',
            'vatCategory' => 'String value',
            'landedCostVarianceAccount' => 'String value',
            'landedCostVarianceSubaccount' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new LandedCostCodeGetAllLandedCostsBycodeRequest(
        code: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LandedCostCodeGetAllLandedCostsBycodeRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->landedCostCodeId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->landedCostType->toBe('String value')
        ->applicationMethod->toBe('String value')
        ->allocationMethod->toBe('String value')
        ->supplierId->toBe('mock-id-123')
        ->supplierLocationId->toBe('mock-id-123')
        ->terms->toBe('String value')
        ->reasonCode->toBe('String value')
        ->landedCostAccrualAccount->toBe('String value')
        ->landedCostAccrualSubaccount->toBe('String value')
        ->vatCategory->toBe('String value')
        ->landedCostVarianceAccount->toBe('String value')
        ->landedCostVarianceSubaccount->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the landedCostCodeGetAllLandedCostsRequest method in the LandedCostCode resource', function () {
    Saloon::fake([
        LandedCostCodeGetAllLandedCostsRequest::class => MockResponse::make([
            0 => [
                'landedCostCodeId' => 'mock-id-123',
                'description' => 'String value',
                'landedCostType' => 'String value',
                'applicationMethod' => 'String value',
                'allocationMethod' => 'String value',
                'supplierId' => 'mock-id-123',
                'supplierLocationId' => 'mock-id-123',
                'terms' => 'String value',
                'reasonCode' => 'String value',
                'landedCostAccrualAccount' => 'String value',
                'landedCostAccrualSubaccount' => 'String value',
                'vatCategory' => 'String value',
                'landedCostVarianceAccount' => 'String value',
                'landedCostVarianceSubaccount' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'landedCostCodeId' => 'mock-id-123',
                'description' => 'String value',
                'landedCostType' => 'String value',
                'applicationMethod' => 'String value',
                'allocationMethod' => 'String value',
                'supplierId' => 'mock-id-123',
                'supplierLocationId' => 'mock-id-123',
                'terms' => 'String value',
                'reasonCode' => 'String value',
                'landedCostAccrualAccount' => 'String value',
                'landedCostAccrualSubaccount' => 'String value',
                'vatCategory' => 'String value',
                'landedCostVarianceAccount' => 'String value',
                'landedCostVarianceSubaccount' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new LandedCostCodeGetAllLandedCostsRequest(
        code: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LandedCostCodeGetAllLandedCostsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->landedCostCodeId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->landedCostType->toBe('String value')
        ->applicationMethod->toBe('String value')
        ->allocationMethod->toBe('String value')
        ->supplierId->toBe('mock-id-123')
        ->supplierLocationId->toBe('mock-id-123')
        ->terms->toBe('String value')
        ->reasonCode->toBe('String value')
        ->landedCostAccrualAccount->toBe('String value')
        ->landedCostAccrualSubaccount->toBe('String value')
        ->vatCategory->toBe('String value')
        ->landedCostVarianceAccount->toBe('String value')
        ->landedCostVarianceSubaccount->toBe('String value')
        ->errorInfo->toBe('String value');
});
