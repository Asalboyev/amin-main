{{--<?php--}}

{{--if ($_SERVER['REQUEST_METHOD'] === 'POST') {--}}
{{--    // Telegram botning API kalitasi--}}
{{--    $botToken = '6398817589:AAE2zwkh588CWUhNXAtIqTCM-zwGUNV6umQ';--}}
{{--    // Botga yuboriladigan chat ID--}}
{{--    $chatID = '5008167286';--}}
{{--    // Ism va telefon raqamini olish--}}
{{--    $name = $_POST['name'];--}}
{{--    $phone = $_POST['phone'];--}}
{{--    // Yuboriladigan xabar--}}
{{--    $message = "Ism: $name\nTelefon Raqam: $phone";--}}

{{--    // Telegramga so'rov yuborish uchun funktsiya--}}
{{--    function sendMessage($chatID, $message, $botToken) {--}}
{{--        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";--}}
{{--        $params = [--}}
{{--            'chat_id' => $chatID,--}}
{{--            'text' => $message--}}
{{--        ];--}}

{{--        $ch = curl_init();--}}
{{--        curl_setopt($ch, CURLOPT_URL, $url);--}}
{{--        curl_setopt($ch, CURLOPT_POST, true);--}}
{{--        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);--}}
{{--        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);--}}
{{--        $response = curl_exec($ch);--}}
{{--        curl_close($ch);--}}

{{--        return $response;--}}
{{--    }--}}

{{--    // Xabarni yuborish--}}
{{--    $response = sendMessage($chatID, $message, $botToken);--}}

{{--    if ($response) {--}}
{{--        echo "Malumotlar muvaffaqiyatli yuborildi!";--}}
{{--    } else {--}}
{{--        echo "Xatolik yuz berdi. Malumotlar yuborilmadi.";--}}
{{--    }--}}
{{--}--}}
{{--?>--}}
