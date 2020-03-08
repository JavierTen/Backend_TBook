<?php

namespace App\Repositories;

use App\Models\Give;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomFieldValueRepository
 * @package App\Repositories
 * @version July 24, 2018, 9:13 pm UTC
 *
 * @method CustomFieldValue findWithoutFail($id, $columns = ['*'])
 * @method CustomFieldValue find($id, $columns = ['*'])
 * @method CustomFieldValue first($columns = ['*'])
*/
class GiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'token',
        'book_id',
        'user_id',
        'report_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Give::class;
    }
}
