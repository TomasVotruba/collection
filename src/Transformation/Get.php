<?php

declare(strict_types=1);

namespace drupol\collection\Transformation;

use drupol\collection\Contract\Transformation;

/**
 * Class Get.
 */
final class Get implements Transformation
{
    /**
     * @var mixed
     */
    private $default;

    /**
     * @var int|string
     */
    private $key;

    /**
     * Get constructor.
     *
     * @param int|string $key
     * @param mixed $default
     */
    public function __construct($key, $default)
    {
        $this->key = $key;
        $this->default = $default;
    }

    /**
     * {@inheritdoc}
     */
    public function on(iterable $collection)
    {
        $keyToGet = $this->key;
        $default = $this->default;

        foreach ($collection as $key => $value) {
            if ($key === $keyToGet) {
                return $value;
            }
        }

        return $default;
    }
}
