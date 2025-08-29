<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName'  => 'nullable|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'nullable|string|max:20',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string',
        ]);

        // Simpan ke database
        $contact = ContactMessage::create($validated);

        try {
            $mail = new PHPMailer(true);

            // Konfigurasi SMTP Gmail
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'raadeveloperz@gmail.com';
            $mail->Password   = 'jljiijlrggmsadqd';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Pengirim & penerima
            $mail->setFrom('raadeveloperz@gmail.com', 'raadeveloperz');
            $mail->addAddress('kadaviradityaa@gmail.com', 'Admin');
            $mail->addReplyTo($validated['email'], $validated['firstName']);

            // Isi email
            $mail->isHTML(true);
            $mail->Subject = "Pesan Baru: " . $validated['subject'];
            $mail->Body    = "
                <h3>Pesan Baru dari Form Kontak</h3>
                <p><b>Nama:</b> {$validated['firstName']} {$validated['lastName']}</p>
                <p><b>Email:</b> {$validated['email']}</p>
                <p><b>Telepon:</b> {$validated['phone']}</p>
                <p><b>Subjek:</b> {$validated['subject']}</p>
                <p><b>Pesan:</b><br>{$validated['message']}</p>
            ";

            $mail->send();

            // Kembalikan JSON untuk axios
            return response()->json([
                'message' => 'Pesan Anda berhasil dikirim dan tersimpan.'
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Pesan tersimpan, tapi gagal kirim email: '.$mail->ErrorInfo
            ], 500);
        }
    }
}
