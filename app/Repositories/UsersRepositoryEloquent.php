<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\UsersRepository;
use App\Models\Users;
use App\Validators\UsersValidator;

/**
 * Class UsersRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UsersRepositoryEloquent extends BaseRepository implements UsersRepository
{
    protected $fieldSearchable=[

    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Users::class;
    }
    public function validator()
    {
        return UsersValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter()
    {
        return "Prettus\\Repository\\Presenter\\ModelFractalPresenter";
    }

}
