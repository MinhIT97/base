<?php

namespace Modules\Log\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface LogRepository extends RepositoryInterface
{
    public function getEntity();
}
