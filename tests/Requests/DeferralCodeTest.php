<?php

// auto-generated

use Pionect\VismaSdk\Requests\DeferralCode\DeferralCodeGetDeferralCodeBydeferralCodeIdRequest;
use Pionect\VismaSdk\Requests\DeferralCode\DeferralCodeGetDeferralCodesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the deferralCodeGetDeferralCodeBydeferralCodeId method in the DeferralCode resource', function () {
    Saloon::fake([
        DeferralCodeGetDeferralCodeBydeferralCodeIdRequest::class => MockResponse::make([
            'deferralCode' => 'Mock value',
            'description' => 'Mock value',
            'deferredRevenueFromItem' => true,
            'recognitionMethod' => 'Mock value',
            'codeType' => 'Mock value',
            'deferralAccount' => 'Mock value',
            'deferralSub' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new DeferralCodeGetDeferralCodeBydeferralCodeIdRequest(
        deferralCodeIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DeferralCodeGetDeferralCodeBydeferralCodeIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->deferralCode->toBe('Mock value')
        ->description->toBe('Mock value')
        ->deferredRevenueFromItem->toBeTrue()
        ->recognitionMethod->toBe('Mock value')
        ->codeType->toBe('Mock value')
        ->deferralAccount->toBe('Mock value')
        ->deferralSub->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the deferralCodeGetDeferralCodesCollection method in the DeferralCode resource', function () {
    Saloon::fake([
        DeferralCodeGetDeferralCodesCollectionRequest::class => MockResponse::make([
            0 => [
                'deferralCode' => 'Mock value',
                'description' => 'Mock value',
                'deferredRevenueFromItem' => true,
                'recognitionMethod' => 'Mock value',
                'codeType' => 'Mock value',
                'deferralAccount' => 'Mock value',
                'deferralSub' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'deferralCode' => 'Mock value',
                'description' => 'Mock value',
                'deferredRevenueFromItem' => true,
                'recognitionMethod' => 'Mock value',
                'codeType' => 'Mock value',
                'deferralAccount' => 'Mock value',
                'deferralSub' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new DeferralCodeGetDeferralCodesCollectionRequest(pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (DeferralCodeGetDeferralCodesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->deferralCode->toBe('Mock value')
        ->description->toBe('Mock value')
        ->deferredRevenueFromItem->toBeTrue()
        ->recognitionMethod->toBe('Mock value')
        ->codeType->toBe('Mock value')
        ->deferralAccount->toBe('Mock value')
        ->deferralSub->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
