<?php

namespace App\Http\Factories\ContactUs;

use App\Http\Requests\StoreContactUsRequest;

interface ContactUsFactoryInterface
{
    public function save(StoreContactUsRequest $storeContactUsRequest): array;
}
