<?php

use Pionect\VismaSdk\Requests\DeferralCode\DeferralCodeGetDeferralCodeBydeferralCodeIdRequest;
use Pionect\VismaSdk\Requests\DeferralCode\DeferralCodeGetDeferralCodesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the deferralCodeGetDeferralCodeBydeferralCodeIdRequest method in the DeferralCode resource', function () {
    Saloon::fake([
        DeferralCodeGetDeferralCodeBydeferralCodeIdRequest::class => MockResponse::make([
            'deferralCode' => 'String value',
            'description' => 'String value',
            'deferredRevenueFromItem' => true,
            'recognitionMethod' => 'String value',
            'codeType' => 'String value',
            'deferralAccount' => [
                'description' => 'String value',
            ],
            'deferralSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new DeferralCodeGetDeferralCodeBydeferralCodeIdRequest(
        deferralCodeId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DeferralCodeGetDeferralCodeBydeferralCodeIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->deferralCode->toBe('String value')
        ->description->toBe('String value')
        ->deferredRevenueFromItem->toBe(true)
        ->recognitionMethod->toBe('String value')
        ->codeType->toBe('String value')
        ->deferralAccount->description->toBe('String value')
        ->deferralSub->active->toBe(true)
        ->deferralSub->description->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the deferralCodeGetDeferralCodesRequest method in the DeferralCode resource', function () {
    Saloon::fake([
        DeferralCodeGetDeferralCodesRequest::class => MockResponse::make([
            0 => [
                'deferralCode' => 'String value',
                'description' => 'String value',
                'deferredRevenueFromItem' => true,
                'recognitionMethod' => 'String value',
                'codeType' => 'String value',
                'deferralAccount' => [
                    'description' => 'String value',
                ],
                'deferralSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            1 => [
                'deferralCode' => 'String value',
                'description' => 'String value',
                'deferredRevenueFromItem' => true,
                'recognitionMethod' => 'String value',
                'codeType' => 'String value',
                'deferralAccount' => [
                    'description' => 'String value',
                ],
                'deferralSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new DeferralCodeGetDeferralCodesRequest(
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DeferralCodeGetDeferralCodesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->deferralCode->toBe('String value')
        ->description->toBe('String value')
        ->deferredRevenueFromItem->toBe(true)
        ->recognitionMethod->toBe('String value')
        ->codeType->toBe('String value')
        ->deferralAccount->description->toBe('String value')
        ->deferralSub->active->toBe(true)
        ->deferralSub->description->toBe('String value')
        ->errorInfo->toBe('String value');
});
