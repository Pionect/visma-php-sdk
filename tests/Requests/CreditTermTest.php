<?php

use Pionect\VismaSdk\Requests\CreditTerm\CreditTermGetCreditTermsRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the creditTermGetCreditTermsRequest method in the CreditTerm resource', function () {
    Saloon::fake([
        CreditTermGetCreditTermsRequest::class => MockResponse::make([
            'pageNumber' => 1,
            'pageSize' => 2,
            'totalCount' => 2,
            'records' => [
                0 => [
                    'termsId' => 'mock-id-123',
                    'description' => 'String value',
                    'visibleTo' => 'String value',
                    'dueDateType' => 'String value',
                    'moveDueDateIfOnTheWeekend' => 'String value',
                    'dueDay1' => 42,
                    'dueDay1dayFrom1' => 42,
                    'dueDay1dayTo1' => 42,
                    'dueDay2' => 42,
                    'dueDay2dayFrom1' => 42,
                    'dueDay2dayTo1' => 42,
                    'discountType' => 'String value',
                    'discountDay' => 42,
                    'discountPercent' => 42,
                    'delayDays' => 42,
                    'calculationType' => 'String value',
                    'instalmentType' => 'String value',
                    'numberOfInstalments' => 42,
                    'instalmentFrequency' => 'String value',
                    'instalmentMethod' => 'String value',
                    'instalmentsSchedule' => [],
                    'createdDateTime' => '2025-11-22T10:40:04+00:00',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                ],
                1 => [
                    'termsId' => 'mock-id-123',
                    'description' => 'String value',
                    'visibleTo' => 'String value',
                    'dueDateType' => 'String value',
                    'moveDueDateIfOnTheWeekend' => 'String value',
                    'dueDay1' => 42,
                    'dueDay1dayFrom1' => 42,
                    'dueDay1dayTo1' => 42,
                    'dueDay2' => 42,
                    'dueDay2dayFrom1' => 42,
                    'dueDay2dayTo1' => 42,
                    'discountType' => 'String value',
                    'discountDay' => 42,
                    'discountPercent' => 42,
                    'delayDays' => 42,
                    'calculationType' => 'String value',
                    'instalmentType' => 'String value',
                    'numberOfInstalments' => 42,
                    'instalmentFrequency' => 'String value',
                    'instalmentMethod' => 'String value',
                    'instalmentsSchedule' => [],
                    'createdDateTime' => '2025-11-22T10:40:04+00:00',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                ],
            ],
        ], 200),
    ]);

    $request = new CreditTermGetCreditTermsRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        termsId: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CreditTermGetCreditTermsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});
