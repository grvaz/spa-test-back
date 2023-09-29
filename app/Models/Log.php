<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Log extends Model
{
    public const TYPE_CREATE_CONTACT = 'create_contact';
    public const TYPE_ATTACH_CONTACT = 'attach_contact';

    protected $appends = ['date'];
    protected $fillable = ['type', 'success'];

    public function getDateAttribute()
    {
        if (empty($this->attributes['created_at']))
            return '';
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('d.m.Y H:i');
    }
}
