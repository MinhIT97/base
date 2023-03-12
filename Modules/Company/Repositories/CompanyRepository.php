<?php

namespace Modules\Company\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CompanyRepository.
 *
 * @package namespace App\Repositories;
 */
interface CompanyRepository extends RepositoryInterface
{
    public function getEntity();

}
