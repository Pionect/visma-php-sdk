<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\EarningType\EarningTypeGetAllEarningTypeDtosCollectionRequest;
use Pionect\VismaSdk\Requests\EarningType\EarningTypeGetEarningTypeBytypeCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the earningTypeGetEarningTypeBytypeCd method in the EarningType resource', function () {
    Saloon::fake([
        EarningTypeGetEarningTypeBytypeCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'earningTypes',
                'id' => 'mock-id-123',
                'attributes' => [
                    'code' => 'Mock value',
                    'description' => 'Mock value',
                    'isOvertime' => true,
                    'isBillable' => true,
                    'isActive' => true,
                    'overtimeMultiplier' => 3.14,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new EarningTypeGetEarningTypeBytypeCdRequest(
        typeCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EarningTypeGetEarningTypeBytypeCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->code->toBe('Mock value')
        ->description->toBe('Mock value')
        ->isOvertime->toBe(true)
        ->isBillable->toBe(true)
        ->isActive->toBe(true)
        ->overtimeMultiplier->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the earningTypeGetAllEarningTypeDtosCollection method in the EarningType resource', function () {
    Saloon::fake([
        EarningTypeGetAllEarningTypeDtosCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'earningTypes',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'code' => 'Mock value',
                        'description' => 'Mock value',
                        'isOvertime' => true,
                        'isBillable' => true,
                        'isActive' => true,
                        'overtimeMultiplier' => 3.14,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'earningTypes',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'code' => 'Mock value',
                        'description' => 'Mock value',
                        'isOvertime' => true,
                        'isBillable' => true,
                        'isActive' => true,
                        'overtimeMultiplier' => 3.14,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new EarningTypeGetAllEarningTypeDtosCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (EarningTypeGetAllEarningTypeDtosCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->code->toBe('Mock value')
        ->description->toBe('Mock value')
        ->isOvertime->toBe(true)
        ->isBillable->toBe(true)
        ->isActive->toBe(true)
        ->overtimeMultiplier->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
