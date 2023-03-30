<?php

namespace App\Http\Factories\ContactUs;

use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUs;

class ContactUsDBFactory implements ContactUsFactoryInterface
{
    public function save(StoreContactUsRequest $storeContactUsRequest): array
    {
        $contactUsData = $storeContactUsRequest->validated();

        ContactUs::query()->create($contactUsData);

        return $contactUsData;
    }
}
