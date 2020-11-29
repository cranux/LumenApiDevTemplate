<?php


namespace App\Models;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Member extends Model implements AuthenticatableContract,JWTSubject,Transformable
{
    use HasFactory
        , TransformableTrait
        , Authenticatable;
    /**
     * @var string
     */
    protected $table = 'members';

    /**
     * @var array
     */
    protected $guarded = [];
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
}
