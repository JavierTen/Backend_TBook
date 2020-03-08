<?php

namespace App\Repositories;

use App\Models\Report;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExtraRepository
 * @package App\Repositories
 * @version August 29, 2019, 9:39 pm UTC
 *
 * @method Extra findWithoutFail($id, $columns = ['*'])
 * @method Extra find($id, $columns = ['*'])
 * @method Extra first($columns = ['*'])
*/
class ReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'token',
        'status',
        'book_id',
        'give_id',
        'application_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Report::class;
    }
}
