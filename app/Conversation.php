<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function saveBestReply(Reply $reply)
    {
        $this->best_reply_id = $reply->id;
        $this->save();
    }
}
