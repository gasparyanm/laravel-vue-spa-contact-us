<?php

namespace App\Providers;

use App\Http\Factories\ContactUs\ContactUsDBFactory;
use App\Http\Factories\ContactUs\ContactUsEmailFactory;
use App\Http\Factories\ContactUs\ContactUsFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;

class ContactUsProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ContactUsFactory::class, function () {
            switch (ContactUsFactory::getFactoryName()) {
                case ContactUsFactory::FACTORY_SYSTEM_DB:
                    $factory = app(ContactUsDBFactory::class);
                    break;
                case ContactUsFactory::FACTORY_SYSTEM_EMAIL:
                    $factory = app(ContactUsEmailFactory::class);
                    break;
                default:
                    throw ValidationException::withMessages(['message' => 'Factory not found.']);
            }

            return new ContactUsFactory($factory);
        });
    }

    public function provides(): array
    {
        return [ContactUsFactory::class];
    }
}
