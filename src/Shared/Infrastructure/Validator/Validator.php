<?php

declare(strict_types=1);

namespace MaciejSz\Nbp\Shared\Infrastructure\Validator;

/**
 * @template T
 * @extends BoolValidator<T>
 * @extends ThrowableValidator<T>
 */
interface Validator extends BoolValidator, ThrowableValidator
{
}
