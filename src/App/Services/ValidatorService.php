<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Validator;
use Framework\Rules\{RequiredRule};

class ValidatorService
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();

        $this->validator->add('required', new RequiredRule);
    }

    public function validateRegiser(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required'],
            'age' => ['required'],
            'country' => ['required'],
            'socialMediaURL' => ['required'],
            'password' => ['required'],
            'confirmPassword' => ['required'],
            'tos' => ['required']
        ]);
    }
}
