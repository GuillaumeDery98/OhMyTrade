<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Symbol
 * @package App\Models
 * @version June 22, 2022, 2:20 pm UTC
 *
 * @property \App\Models\User $user
 * @property string $name
 * @property string $tv_symbol
 * @property string $tv_indicators
 * @property string $twitter
 * @property string $news
 * @property integer $user_id
 */
class Symbol extends Model
{


    public $table = 'symbols';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'tv_symbol',
        'tv_indicators',
        'twitter',
        'news',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'tv_symbol' => 'string',
        'tv_indicators' => 'string',
        'twitter' => 'string',
        'news' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'tv_symbol' => 'required|string|max:255',
        'tv_indicators' => 'required|string',
        'twitter' => 'required|string|max:255',
        'news' => 'required|string|max:255',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
