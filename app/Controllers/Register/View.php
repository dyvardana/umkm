<?php

namespace App\Controllers\Register;

use App\Controllers\BaseController;

class View extends BaseController {

    public function index() {
        helper('mathcaptcha');
        // Menggunakan fungsi generate_math_captcha
        $data['captcha_question'] = generate_math_captcha();
        return view('Register/register', $data);
    }
}
