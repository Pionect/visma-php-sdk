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
            'code' => 'String value',
            'description' => 'String value',
            'isOvertime' => true,
            'isBillable' => true,
            'isActive' => true,
            'overtimeMultiplier' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
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
        ->isOvertime->toBeTrue()
        ->isBillable->toBeTrue()
        ->isActive->toBeTrue()
        ->overtimeMultiplier->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the earningTypeGetAllEarningTypeDtosCollection method in the EarningType resource', function () {
    Saloon::fake([
        EarningTypeGetAllEarningTypeDtosCollectionRequest::class => MockResponse::make([
            0 => [
                'code' => 'String value',
                'description' => 'String value',
                'isOvertime' => true,
                'isBillable' => true,
                'isActive' => true,
                'overtimeMultiplier' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            ],
            1 => [
                'code' => 'String value',
                'description' => 'String value',
                'isOvertime' => true,
                'isBillable' => true,
                'isActive' => true,
                'overtimeMultiplier' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            ],
        ], 200),
    ]);

    $request = (new EarningTypeGetAllEarningTypeDtosCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (EarningTypeGetAllEarningTypeDtosCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->code->toBe('String value')
        ->description->toBe('String value')
        ->isOvertime->toBeTrue()
        ->isBillable->toBeTrue()
        ->isActive->toBeTrue()
        ->overtimeMultiplier->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
