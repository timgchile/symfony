<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Bridge\Pusher;

/**
 * @author Yasmany Cubela Medina <yasmanycm@gmail.com>
 */
class PusherRecipient implements PusherRecipientInterface
{
    private array $channels;

    public function __construct(array $channels)
    {
        $this->channels = $channels;
    }

    public function getChannels(): array
    {
        return $this->channels;
    }
}