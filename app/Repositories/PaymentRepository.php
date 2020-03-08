<?php

namespace App\Repositories;

use App\Models\Payment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version August 29, 2019, 9:39 pm UTC
 *
 * @method Payment findWithoutFail($id, $columns = ['*'])
 * @method Payment find($id, $columns = ['*'])
 * @method Payment first($columns = ['*'])
*/
class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'token',
        'status',
        'price',
        'description',
        'give_id',
        'penaltie_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Payment::class;
    }

    
    
    /**
     * get my foods
     **/
    public function myPayments(){

        return Payment::join("orders", "orders.payment_id", "=", "payments.id")            
            ->join("user_restaurants", "user_restaurants.restaurant_id", "=", "orders.restaurant_id")
            ->where('user_restaurants.user_id', auth()->id())
            ->select('payments.*')
            ->get();
    }

}
