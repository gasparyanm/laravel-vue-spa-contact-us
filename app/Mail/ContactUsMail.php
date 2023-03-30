<?php

namespace App\Mail;

use App\Http\Requests\StoreContactUsRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(private StoreContactUsRequest $storeContactUsRequest)
    {
    }

    public function build(): self
    {
        return $this->view('emails.contactUs')
            ->with($this->storeContactUsRequest->validated());
    }
}
