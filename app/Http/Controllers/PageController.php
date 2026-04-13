<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function vpn()
    {
        return view('pages.vpn');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|min:2|max:100',
            'email'         => 'required|email',
            'phone'         => 'nullable|max:20',
            'service'       => 'nullable|string',
            'service_autre' => 'nullable|string|max:200',
            'message'       => 'nullable|max:2000',
        ]);

        // Si "Autre" → combiner avec la précision
        if ($request->service === 'Autre' && $request->service_autre) {
            $validated['service'] = 'Autre : ' . $request->service_autre;
        }

        // Supprimer service_autre du tableau avant sauvegarde
        unset($validated['service_autre']);

        // Sauvegarder en base de données
        $contact = Contact::create($validated);

        // Envoyer l'email
        try {
            Mail::to('admin-dsc@digitsahelcloud.com')
                ->send(new ContactMail($contact));
        } catch (\Exception $e) {
            // L'email échoue mais le message est sauvegardé en DB
        }

        return redirect()->route('contact')
            ->with('success', 'Votre message a bien été envoyé ! Nous vous répondrons sous 24h. 🎉');
    }
}
