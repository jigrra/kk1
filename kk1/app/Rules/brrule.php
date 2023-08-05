<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Http\Requests\brreq;

class brrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value >=18 && $value <= 100;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The Age must be between 18 to 100.';
    }
}