<?php

use Pionect\VismaSdk\Requests\EarningType\EarningTypeGetAllEarningTypeDtosRequest;
use Pionect\VismaSdk\Requests\EarningType\EarningTypeGetEarningTypeBytypeCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the earningTypeGetEarningTypeBytypeCdRequest method in the EarningType resource', function () {
    Saloon::fake([
        EarningTypeGetEarningTypeBytypeCdRequest::class => MockResponse::make([
            'code' => 'String value',
            'description' => 'String value',
            'isOvertime' => true,
            'isBillable' => true,
            'isActive' => true,
            'overtimeMultiplier' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new EarningTypeGetEarningTypeBytypeCdRequest(
        typeCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EarningTypeGetEarningTypeBytypeCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->code->toBe('String value')
        ->description->toBe('String value')
        ->isOvertime->toBe(true)
        ->isBillable->toBe(true)
        ->isActive->toBe(true)
        ->overtimeMultiplier->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the earningTypeGetAllEarningTypeDtosRequest method in the EarningType resource', function () {
    Saloon::fake([
        EarningTypeGetAllEarningTypeDtosRequest::class => MockResponse::make([
            0 => [
                'code' => 'String value',
                'description' => 'String value',
                'isOvertime' => true,
                'isBillable' => true,
                'isActive' => true,
                'overtimeMultiplier' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'code' => 'String value',
                'description' => 'String value',
                'isOvertime' => true,
                'isBillable' => true,
                'isActive' => true,
                'overtimeMultiplier' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new EarningTypeGetAllEarningTypeDtosRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EarningTypeGetAllEarningTypeDtosRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->code->toBe('String value')
        ->description->toBe('String value')
        ->isOvertime->toBe(true)
        ->isBillable->toBe(true)
        ->isActive->toBe(true)
        ->overtimeMultiplier->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});
