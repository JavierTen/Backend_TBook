<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cart
 * @package App\Models
 * @version September 4, 2019, 3:38 pm UTC
 *
 * @property \App\Models\Food food
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection extra
 * @property integer food_id
 * @property integer user_id
 * @property integer quantity
 */
class Schedule extends Model
{

    public $table = 'schedules';
    


    public $fillable = [
        'id',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'food_id' => 'integer',
        'user_id' => 'integer',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'food_id' => 'required|exists:foods,id',
        'user_id' => 'required|exists:users,id'
    ];

    /**
     * New Attributes
     *
     * @var array
     */
    protected $appends = [
        'custom_fields'
    ];

    public function customFieldsValues()
    {
        return $this->morphMany('App\Models\CustomFieldValue', 'customizable');
    }

    public function getCustomFieldsAttribute()
    {
        $hasCustomField = in_array(static::class,setting('custom_field_models',[]));
        if (!$hasCustomField){
            return [];
        }
        $array = $this->customFieldsValues()
            ->join('custom_fields','custom_fields.id','=','custom_field_values.custom_field_id')
            ->where('custom_fields.in_table','=',true)
            ->get()->toArray();

        return convertToAssoc($array,'name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function food()
    {
        return $this->belongsTo(\App\Models\Food::class, 'food_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function extras()
    {
        return $this->belongsToMany(\App\Models\Extra::class, 'cart_extras');
    }
}
