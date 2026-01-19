<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotSpamEmail implements Rule
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
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $parts = explode('@', $value);
        if (count($parts) !== 2) {
            return false;
        }

        $localPart = $parts[0];

        // Check for excessive dots in local part
        if (substr_count($localPart, '.') > 1) {
            return false;
        }

        // Check for excessive length of local part with no alphanumeric separation?
        // No, local part can be long.

        // Check for suspicious patterns like alternating dot and char n.e.m.e...
        if (preg_match('/(\w\.)+\w/', $localPart) && substr_count($localPart, '.') > 3) {
             // matches "a.b.c.d"
             return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute format is invalid.';
    }
}
