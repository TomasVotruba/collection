<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\collection\Contract\Operation;

/**
 * @template TKey
 * @template T
 */
interface Allable
{
    /**
     * Convert the collection into an array.
     *
     * @see https://loophp-collection.readthedocs.io/en/stable/pages/api.html#all
     *
     * @return array<TKey, T>
     */
    public function all(): array;
}
