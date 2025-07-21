<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Brevo\Client\Configuration;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Model\SendSmtpEmail;
use Exception;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $apiKey = config('services.brevo.key');

        if (empty($apiKey)) {
            Log::error('Brevo API key is missing.');
            return back()->with('error', 'Brevo API key not configured.');
        }

        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', $apiKey);
        $apiInstance = new TransactionalEmailsApi(null, $config);

        $sender = [
            'name'  => 'Christian David Moreno Portfolio',
            'email' => 'cdocdmoreno@gmail.com', 
        ];

        $recipient = [
            'name'  => 'Christian David Moreno',
            'email' => 'cdocdmoreno@gmail.com',
        ];

        $subject = $validated['subject'] ?: 'New Contact Message';
        $content = <<<EOT
        Name: {$validated['name']}
        Email: {$validated['email']}
        Subject: {$subject}

        Message:
        {$validated['message']}
        EOT;

        $email = (new SendSmtpEmail())
            ->setSender($sender)
            ->setTo([$recipient])
            ->setReplyTo([
                'name'  => $validated['name'],
                'email' => $validated['email'],
            ])
            ->setSubject($subject)
            ->setTextContent($content);

        try {
            $apiInstance->sendTransacEmail($email);
            return response()->json(['success' => true, 'message' => 'Your message has been sent!']);

        } catch (Exception $e) {
            Log::error('Brevo send failed', ['message' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Failed to send your message. Please try again later.'], 500);

        }
    }
}
