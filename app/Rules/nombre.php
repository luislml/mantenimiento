<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class nombre implements Rule
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
        $uppercase = preg_match('@[A-Z]@', $value);
        $lowercase = preg_match('@[a-z]@', $value);
        
        $specialChars = preg_match('@[^\w]@', $value);

        return $uppercase && $lowercase && $specialChars;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La :attribute debe tener al menos 8 caracteres y debe incluir al menos una letra mayúscula, un carácter especial.';
    }
}
