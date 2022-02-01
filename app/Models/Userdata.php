<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use stdClass;

class Userdata extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'userdatas';

    public function setUserIdAttribute($value)
    {

    }

    public function getUserIdAttribute($value)
    {

    }

    /**
     * @param stdClass $userdata
     * @return array
     */
    public static function formatNotificationData(stdClass $userdata)
    {
        $user_id = Auth::id();

        return [
            'user_id' => $user_id,
            'phone_number' => $userdata->phone_number,
            'provider' => $userdata->provider,
            'number_type' => $userdata->number_type,
        ];
    }
}
