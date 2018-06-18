<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TblEventModel extends Model
{
    protected $table = 'tbl_event';
    protected $primaryKey = 'event_id';
    public $timestamps = false;

    public function scopeUserInfo($query)
    {
    	$query->join('tbl_user_info','tbl_user_info.user_id','=','tbl_user.user_id');
    	return $query;
    }
}
