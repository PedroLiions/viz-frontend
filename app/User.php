<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    use Notifiable;

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }

    public function pagesWithPivot()
    {
        return $this->pages()
            ->withPivot('read', 'update', 'delete', 'create');
    }

    public function chat()
    {
        return $this->hasMany(UserMessage::class,'sender_user_id', 'recipient_user_id');
    }

    public function getMessages($recipient_id)
    {
        return $this->chat()
            ->where('recipient_user_id', $recipient_id)
            ->where('sender_user_id', $this->id)
            ->get();
    }
}
