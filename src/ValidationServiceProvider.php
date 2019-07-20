<?php
namespace AppArk\Validation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class ValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        Request::macro('validate', function (array $rules, ...$params) {
            return validator()->validate($this->all(), $rules, ...$params);
        });
    }
}
