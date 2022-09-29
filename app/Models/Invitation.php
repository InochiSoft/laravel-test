<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public static function generateCode($prefix = '', $length = 10)
    {
        $pool = array_merge(
            range(1, 9),
            range('A', 'Z'),
            range(1, 9),
            range('A', 'Z'));
        $key = "";
        for ($i = 0; $i < $length; $i++) {
            $key .= $pool[mt_rand(0, count($pool) - 1)];
        }
        return $prefix . $key;
    }

}
