<?php

namespace App\Http\Factories\ContactUs;

use App\Http\Requests\StoreContactUsRequest;
use App\Mail\ContactUsMail;
use Exception;
use Illuminate\Support\Facades\Mail;

class ContactUsEmailFactory implements ContactUsFactoryInterface
{
    public function save(StoreContactUsRequest $storeContactUsRequest): array
    {
        Mail::to(config('mail.support_email'))
            ->send(new ContactUsMail($storeContactUsRequest));

        if (Mail::failures()) {
            throw new Exception('Sorry! Please try again latter');
        }

        return $storeContactUsRequest->validated();
    }
}
