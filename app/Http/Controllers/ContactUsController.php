<?php

namespace App\Http\Controllers;

use App\Http\Factories\ContactUs\ContactUsFactory;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Resources\ContactUsResource;

class ContactUsController extends Controller
{
    public function store(
        StoreContactUsRequest $request,
        ContactUsFactory $contactUsFactory
    ): ContactUsResource {
        $contactUs = $contactUsFactory->save($request);

        return new ContactUsResource($request, $contactUs);
    }
}
