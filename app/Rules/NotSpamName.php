<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotSpamName implements Rule
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
        // 1. Check for links
        if (preg_match('/(http|https|www\.|ftp)/i', $value)) {
            return false;
        }

        // 2. Check for length > 20 and no spaces (suspicious for a name)
        if (strlen($value) > 20 && strpos($value, ' ') === false) {
            return false;
        }

        // 3. Check for too many consecutive consonants (e.g. > 5)
        // Treat y as vowel or consonant? usually consonant in regex unless we are careful, 
        // but for spam detection, long strings of non-vowels are suspicious.
        if (preg_match('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{6,}/', $value)) {
            return false;
        }

        // 4. Check for strict name format (letters and spaces only, min 3 chars)
        if (!preg_match('/^[a-zA-Z\s]{3,}$/', $value)) {
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
        return 'The :attribute field appears to be invalid.';
    }
}
