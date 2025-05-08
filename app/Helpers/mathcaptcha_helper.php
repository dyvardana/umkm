<?php

if (! function_exists('generate_math_captcha')) {
    /**
     * Fungsi untuk menghasilkan soal matematika acak.
     * 
     * @return string
     */
    function generate_math_captcha()
    {
        // Generate dua angka acak untuk soal matematika
        $num1 = rand(1, 30);
        $num2 = rand(1, 20);

        // Tentukan operasi matematika
        $operation = rand(0, 1) ? '+' : '-'; // Pilih antara penjumlahan atau pengurangan

        // Jika operasi pengurangan, pastikan num1 >= num2 untuk menghindari nilai negatif
        if ($operation == '-' && $num1 < $num2) {
            // Jika num1 lebih kecil dari num2, tukar nilai kedua angka
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
        }

        // Buat soal matematika dan jawabannya
        $captcha_question = "$num1 $operation $num2 = ?";
        $captcha_answer = $operation == '+' ? $num1 + $num2 : $num1 - $num2;

        // Simpan soal dan jawabannya di session
        session()->set('captcha_answer', $captcha_answer);

        return $captcha_question;
    }
}
