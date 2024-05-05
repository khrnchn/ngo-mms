<?php

namespace App\Widgets;

use App\Filament\Members\Resources\PaymentResource;
use Filament\Widgets\Widget;
use App\Filament\Members\Resources\PaymentResource\Pages;

class NavWidget extends Widget
{
    protected static ?int $sort = -3;

    protected static bool $isLazy = false;

    /**
     * @var view-string
     */
    protected static string $view = 'filament.members.resources.payment-resource.widget.navwidget';

    public function goToSubscription()
    {
    
        return redirect()->to(PaymentResource::getUrl('subscription'));
    }
}
