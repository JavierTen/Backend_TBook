<?php

namespace App\Repositories;

use App\Models\Facultie;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomFieldRepository
 * @package App\Repositories
 * @version July 24, 2018, 9:13 pm UTC
 *
 * @method CustomField findWithoutFail($id, $columns = ['*'])
 * @method CustomField find($id, $columns = ['*'])
 * @method CustomField first($columns = ['*'])
*/
class FacultieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'title',
        'description',
        'director',
        'schedule_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Facultie::class;
    }
}
