<?php

namespace App\Filament\Members\Resources\PaymentResource\Pages;

use App\Filament\Members\Resources\PaymentResource;
use Filament\Resources\Pages\Page;

class Subscription extends Page
{
    protected static string $resource = PaymentResource::class;

    protected static string $view = 'filament.members.resources.payment-resource.pages.subscription';

    public function subscribeMonthly() {
        return "Subscribe Monthly";
    }

    public function subscribeYearly() {
        return "Subscribe yearly";
    }
    
}
