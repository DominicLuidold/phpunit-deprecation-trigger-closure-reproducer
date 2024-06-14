<?php

namespace App;

final readonly class Foo
{
    /**
     * @var array<string|int|null>
     */
    public array $values;

    /**
     * @param array<string|int|null> $values
     */
    public function __construct(array $values)
    {
        $this->values = self::sort($values);
    }

    /**
     * @param array<string|int|null> $values
     *
     * @return array<string|int|null>
     */
    public static function sort(array $values): array
    {
        usort($values, function ($a, $b) {
            return strtolower($a) <=> strtolower($b);
        });

        return $values;
    }
}
