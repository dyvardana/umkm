<!DOCTYPE html>
<html lang="id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta name="Referrer-Policy" content="strict-origin">
    <meta name="X-Permitted-Cross-Domain-Policies" content="none">
    <meta name="X-XSS-Protection" content="1; mode=block">
    <meta name="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Daftar UMKM</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-2xl bg-white p-8 rounded-2xl shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Formulir Pendaftaran UMKM</h2>
            <form id="registerForm" action="<?= esc(base_url('/auth')) ?>" method="post">
                <?= csrf_field() ?>
                <div>
                    <label class="block mb-1 font-medium">Nama Lengkap</label>
                    <input type="text" name="nama" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                </div>
                <div>
                    <label class="block mb-1 font-medium">NIK</label>
                    <input type="text" name="nik" maxlength="16" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Email</label>
                    <input type="email" name="email" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Nomor HP</label>
                    <input type="tel" name="phone" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Nama Usaha</label>
                    <input type="text" name="nama_usaha" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Jenis Usaha</label>
                    <select name="jenis_usaha" class="w-full border border-gray-300 p-2 rounded-xl">
                        <option value="">-- Pilih --</option>
                        <option value="kuliner">Kuliner</option>
                        <option value="kerajinan">Kerajinan</option>
                        <option value="jasa">Jasa</option>
                        <option value="perdagangan">Perdagangan</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Alamat Usaha</label>
                    <textarea name="alamat_usaha" rows="3" class="w-full border border-gray-300 p-2 rounded-xl"></textarea>
                </div>
                <div class="flex gap-4">
                    <div class="w-1/2">
                        <label class="block mb-1 font-medium">Password</label>
                        <input type="password" name="password" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                    </div>
                    <div class="w-1/2">
                        <label class="block mb-1 font-medium">Re-Password</label>
                        <input type="password" name="password_confirm" required class="w-full border border-gray-300 p-2 rounded-xl"/>
                    </div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="terms" required class="mr-2"/>
                    <label for="terms" class="text-sm">Saya menyetujui <a href="#" class="text-blue-600 underline">syarat & ketentuan</a></label>
                </div>
                <!-- Captcha -->
                <!-- Captcha -->
                <div>
                    <label class="block mb-1 font-medium">Kode Captcha</label>
                    <input type="text" name="captcha" placeholder="Captcha: <?= esc($captcha_question) ?>"
                           required class="w-full border border-gray-300 p-2 mt-2 rounded-xl" />
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-xl hover:bg-blue-700">Daftar Sekarang</button>
            </form>
        </div>
    </body>
</html>
