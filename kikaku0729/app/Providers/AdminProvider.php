<?php

namespace App\Providers;

//use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Auth\EloquentUserProvider as AdminsProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class AdminProvider extends AdminsProvider
{
    /**
     * The hasher implementation.
     *
     * @var \Illuminate\Contracts\Hashing\Hasher
     */
    protected $hasher;

    /**
     * The Eloquent user model.
     *
     * @var string
     */
    protected $model;


    /**
     * Create a new database user provider.
     *
     * @param  \Illuminate\Contracts\Hashing\Hasher  $hasher
     * @param  string  $model
     * @return void
     */
    public function __construct(HasherContract $hasher, $model)
    {
        $this->model = $model;
        $this->hasher = $hasher;
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        //テーブルのパスワードに該当するフィールド名に変更する
        $plain = $credentials['admin_password'];
        return $this->hasher->check($plain, $user->getAuthPassword());
    }

    /**
     * Create a new instance of the model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createModel()
    {
        $class = '\\'.ltrim($this->model, '\\');

        return new $class;
    }

    /**
     * Gets the hasher implementation.
     *
     * @return \Illuminate\Contracts\Hashing\Hasher
     */
    public function getHasher()
    {
        return $this->hasher;
    }

    /**
     * Sets the hasher implementation.
     *
     * @param  \Illuminate\Contracts\Hashing\Hasher  $hasher
     * @return $this
     */
    public function setHasher(HasherContract $hasher)
    {
        $this->hasher = $hasher;

        return $this;
    }

    /**
     * Gets the name of the Eloquent user model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the name of the Eloquent user model.
     *
     * @param  string  $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}