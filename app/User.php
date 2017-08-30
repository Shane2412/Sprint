<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\AuthTraits\OwnsRecord;
use App\Buyers;
use App\Farmers;

class User extends Authenticatable
{
    use Notifiable, OwnsRecord;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'contact', 'address','is_admin', 'status_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function demands()
    {
      return  $this->hasMany(Buyers::class);
    }

    public function crops()
    {
      return $this->hasMany(Farmers::class);
    }

    public function comments()
    {
      return $this->hasMany(Comments::class);
    }

    public function adminOrCurrentUserOwns($record)
    {
      if(Auth::user()->is_admin == 1)
      {
        return true;
      }
      return $record->user_id === Auth::id();
    }

    public function currentUserOwns($record)
    {
      return $record->user_id == Auth::id();
    }

}
