<?php

namespace Modules\Menu\Repositories\Admin;

use Modules\Menu\Entities\ItemMenu;
use Modules\Menu\Repositories\Admin\ItemMenuRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class AccountantRepositoryEloquent.
 */
class ItemMenuRepositoryEloquent extends BaseRepository implements ItemMenuRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ItemMenu::class;
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
