<?php

// auto-generated

use Pionect\VismaSdk\Requests\DeferralCode\DeferralCodeGetDeferralCodeBydeferralCodeIdRequest;
use Pionect\VismaSdk\Requests\DeferralCode\DeferralCodeGetDeferralCodesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the deferralCodeGetDeferralCodeBydeferralCodeId method in the DeferralCode resource', function () {
    Saloon::fake([
        DeferralCodeGetDeferralCodeBydeferralCodeIdRequest::class => MockResponse::make([
            'deferralCode' => 'String value',
            'description' => 'String value',
            'deferredRevenueFromItem' => true,
            'recognitionMethod' => 'String value',
            'codeType' => 'String value',
            'deferralAccount' => null,
            'deferralSub' => null,
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->deferralCode->toBe('String value')
        ->description->toBe('String value')
        ->deferredRevenueFromItem->toBeTrue()
        ->recognitionMethod->toBe('String value')
        ->codeType->toBe('String value')
        ->deferralAccount->toBeNull()
        ->deferralSub->toBeNull()
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the deferralCodeGetDeferralCodesCollection method in the DeferralCode resource', function () {
    Saloon::fake([
        DeferralCodeGetDeferralCodesCollectionRequest::class => MockResponse::make([
            0 => [
                'deferralCode' => 'String value',
                'description' => 'String value',
                'deferredRevenueFromItem' => true,
                'recognitionMethod' => 'String value',
                'codeType' => 'String value',
                'deferralAccount' => null,
                'deferralSub' => null,
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'deferralCode' => 'String value',
                'description' => 'String value',
                'deferredRevenueFromItem' => true,
                'recognitionMethod' => 'String value',
                'codeType' => 'String value',
                'deferralAccount' => null,
                'deferralSub' => null,
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new DeferralCodeGetDeferralCodesCollectionRequest(pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (DeferralCodeGetDeferralCodesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->deferralCode->toBe('String value')
        ->description->toBe('String value')
        ->deferredRevenueFromItem->toBeTrue()
        ->recognitionMethod->toBe('String value')
        ->codeType->toBe('String value')
        ->deferralAccount->toBeNull()
        ->deferralSub->toBeNull()
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
