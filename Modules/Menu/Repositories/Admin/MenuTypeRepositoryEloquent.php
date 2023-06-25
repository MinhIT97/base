<?php

namespace Modules\Menu\Repositories\Admin;

use Modules\Menu\Entities\MenuType;
use Modules\Menu\Repositories\Admin\MenuTypeRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class AccountantRepositoryEloquent.
 */
class MenuTypeRepositoryEloquent extends BaseRepository implements MenuTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MenuType::class;
    }

    public function getEntity()
    {
        return $this->model;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
