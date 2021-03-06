<?php

declare(strict_types=1);

/*
 * This file is part of Exchanger.
 *
 * (c) Florian Voutzinos <florian@voutzinos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exchanger\Contract;

/**
 * Contract for historical exchange rate queries.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
interface HistoricalExchangeRateQuery extends ExchangeRateQuery
{
    /**
     * Gets the date.
     *
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface;
}
