<?php

declare(strict_types=1);

/*
 * This file is part of Adbeat PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\AdBeat\API;

use Plients\Http\HttpResponse;

class Publisher extends AbstractAPI
{
    /**
     * @param string $publisherId
     * @param array  $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function info(string $publisherId, array $parameters = []): HttpResponse
    {
        return $this->client->get("publisherinfo/{$publisherId}", $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists(array $parameters = []): HttpResponse
    {
        return $this->client->get('publishers', $parameters);
    }
}
