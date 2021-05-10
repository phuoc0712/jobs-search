<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ContainUppercase implements Rule
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
        preg_match('/[A-Z]/',$value, $matches);
        return count($matches) > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Bat buoc phai chua 1 chu hoa .';
    }
}
