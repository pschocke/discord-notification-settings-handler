<?php

namespace pschocke\DiscordNotificationSettings;

use pschocke\NotificationSettings\Handler\Handler;
use pschocke\NotificationSettings\Handler\HandlerInterface;
use pschocke\NotificationSettings\Models\NotificationSetting;

class DiscordHandler extends Handler implements HandlerInterface
{

    protected $request = [
        'webhook' => ['required', 'url'],
    ];

    const via = 'discord';

    protected $notificationChannel = 'discord';

    public function canSend(string $methodName): bool
    {
        return $methodName === 'discord';
    }

    public function getSend(NotificationSetting $notificationSetting)
    {
        return $notificationSetting->meta['webhook'];
    }
}