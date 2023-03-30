<?php

namespace App\Http\Factories\ContactUs;

use App\Http\Requests\StoreContactUsRequest;

final class ContactUsFactory implements ContactUsFactoryInterface, ContactUsEnum
{
    public function __construct(private ContactUsFactoryInterface $contactUsFactory)
    {
    }

    public function save(StoreContactUsRequest $storeContactUsRequest): array
    {
        return $this->contactUsFactory->save($storeContactUsRequest);
    }

    public static function getFactoryName(): string
    {
        return self::FACTORY_SYSTEM_DB;
    }
}
