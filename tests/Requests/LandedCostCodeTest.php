<?php

// auto-generated

use Pionect\VismaSdk\Requests\LandedCostCode\LandedCostCodeGetAllLandedCostsBycodeRequest;
use Pionect\VismaSdk\Requests\LandedCostCode\LandedCostCodeGetAllLandedCostsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the landedCostCodeGetAllLandedCostsBycode method in the LandedCostCode resource', function () {
    Saloon::fake([
        LandedCostCodeGetAllLandedCostsBycodeRequest::class => MockResponse::make([
            'landedCostCodeId' => 'mock-id-123',
            'description' => 'Mock value',
            'landedCostType' => 'Mock value',
            'applicationMethod' => 'Mock value',
            'allocationMethod' => 'Mock value',
            'supplierId' => 'mock-id-123',
            'supplierLocationId' => 'mock-id-123',
            'terms' => 'Mock value',
            'reasonCode' => 'Mock value',
            'landedCostAccrualAccount' => 'Mock value',
            'landedCostAccrualSubaccount' => 'Mock value',
            'vatCategory' => 'Mock value',
            'landedCostVarianceAccount' => 'Mock value',
            'landedCostVarianceSubaccount' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new LandedCostCodeGetAllLandedCostsBycodeRequest(
        codeId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LandedCostCodeGetAllLandedCostsBycodeRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->landedCostCodeId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->landedCostType->toBe('Mock value')
        ->applicationMethod->toBe('Mock value')
        ->allocationMethod->toBe('Mock value')
        ->supplierId->toBe('mock-id-123')
        ->supplierLocationId->toBe('mock-id-123')
        ->terms->toBe('Mock value')
        ->reasonCode->toBe('Mock value')
        ->landedCostAccrualAccount->toBe('Mock value')
        ->landedCostAccrualSubaccount->toBe('Mock value')
        ->vatCategory->toBe('Mock value')
        ->landedCostVarianceAccount->toBe('Mock value')
        ->landedCostVarianceSubaccount->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the landedCostCodeGetAllLandedCostsCollection method in the LandedCostCode resource', function () {
    Saloon::fake([
        LandedCostCodeGetAllLandedCostsCollectionRequest::class => MockResponse::make([
            0 => [
                'landedCostCodeId' => 'mock-id-123',
                'description' => 'Mock value',
                'landedCostType' => 'Mock value',
                'applicationMethod' => 'Mock value',
                'allocationMethod' => 'Mock value',
                'supplierId' => 'mock-id-123',
                'supplierLocationId' => 'mock-id-123',
                'terms' => 'Mock value',
                'reasonCode' => 'Mock value',
                'landedCostAccrualAccount' => 'Mock value',
                'landedCostAccrualSubaccount' => 'Mock value',
                'vatCategory' => 'Mock value',
                'landedCostVarianceAccount' => 'Mock value',
                'landedCostVarianceSubaccount' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'landedCostCodeId' => 'mock-id-123',
                'description' => 'Mock value',
                'landedCostType' => 'Mock value',
                'applicationMethod' => 'Mock value',
                'allocationMethod' => 'Mock value',
                'supplierId' => 'mock-id-123',
                'supplierLocationId' => 'mock-id-123',
                'terms' => 'Mock value',
                'reasonCode' => 'Mock value',
                'landedCostAccrualAccount' => 'Mock value',
                'landedCostAccrualSubaccount' => 'Mock value',
                'vatCategory' => 'Mock value',
                'landedCostVarianceAccount' => 'Mock value',
                'landedCostVarianceSubaccount' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new LandedCostCodeGetAllLandedCostsCollectionRequest(code: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (LandedCostCodeGetAllLandedCostsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->landedCostCodeId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->landedCostType->toBe('Mock value')
        ->applicationMethod->toBe('Mock value')
        ->allocationMethod->toBe('Mock value')
        ->supplierId->toBe('mock-id-123')
        ->supplierLocationId->toBe('mock-id-123')
        ->terms->toBe('Mock value')
        ->reasonCode->toBe('Mock value')
        ->landedCostAccrualAccount->toBe('Mock value')
        ->landedCostAccrualSubaccount->toBe('Mock value')
        ->vatCategory->toBe('Mock value')
        ->landedCostVarianceAccount->toBe('Mock value')
        ->landedCostVarianceSubaccount->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
