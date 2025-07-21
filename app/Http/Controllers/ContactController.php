<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Brevo\Client\Configuration;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Model\SendSmtpEmail;
use Exception;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Capitalize name, subject, and message properly
        $capitalizedName = $this->capitalizeText($validated['name']);
        $capitalizedSubject = $validated['subject'] ? $this->capitalizeText($validated['subject']) : 'New Contact Message';
        $capitalizedMessage = $this->capitalizeText($validated['message']);

        $apiKey = config('services.brevo.key');
        if (empty($apiKey)) {
            Log::error('Brevo API key is missing.');
            return back()->with('error', 'Brevo API key not configured.');
        }

        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', $apiKey);
        $apiInstance = new TransactionalEmailsApi(null, $config);

        // Must be a verified sender in Brevo
        $sender = [
            'name' => 'Christian Portfolio',
            'email' => 'cdocdmoreno@gmail.com', 
        ];

        // recipient
        $recipient = [
            'name' => 'Christian David Moreno',
            'email' => 'cdocdmoreno@gmail.com',
        ];

        // Create properly formatted email content
        $content = <<<EOT
        Name: {$capitalizedName}
        Email: {$validated['email']}
        Subject: {$capitalizedSubject}

        Message:
        {$capitalizedMessage}
        EOT;

        $email = (new SendSmtpEmail())
            ->setSender($sender)
            ->setTo([$recipient])
            ->setReplyTo([
                'name' => $capitalizedName,
                'email' => $validated['email'],
            ])
            ->setSubject($capitalizedSubject)
            ->setTextContent($content);

        try {
            $apiInstance->sendTransacEmail($email);
            return response()->json(['success' => true, 'message' => 'Your message has been sent!']);
        } catch (Exception $e) {
            Log::error('Brevo send failed', ['message' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Failed to send your message. Please try again later.'], 500);
        }
    }


    private function capitalizeText($text)
    {

        $text = trim($text);
        
        // Capitalize first letter of each sentence (after periods, exclamation, question marks)
        $text = preg_replace_callback('/(^\w|[.!?]\s*\w)/m', function($matches) {
            return strtoupper($matches[0]);
        }, $text);
        
        // capitalize each word (first and last names)
        if (str_word_count($text) <= 3 && !str_contains($text, '.') && !str_contains($text, '!') && !str_contains($text, '?')) {
            $text = ucwords(strtolower($text));
        }
        
        return $text;
    }
}