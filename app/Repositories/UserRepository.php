<?php

namespace App\Repositories;

use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version July 10, 2018, 11:44 am UTC
 *
 * @method User findWithoutFail($id, $columns = ['*'])
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
*/
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'identification',
        'name',
        'lastname',
        'faculty',
        'email',
        'password',
        'facultie_id',
        'api_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }


}
