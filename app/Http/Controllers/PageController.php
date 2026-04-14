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
            'demandeur_type' => 'required|in:entreprise,particulier',
            'company'        => 'nullable|required_if:demandeur_type,entreprise|string|max:150',
            'name'           => 'required|min:2|max:100',
            'email'          => 'required|email',
            'phone'          => 'required|max:20',
            'role'           => 'required|string|max:100',
            'service'        => 'required|string',
            'service_autre'  => 'nullable|string|max:200',
            'message'        => 'required|max:2000',
        ], [
            // Messages d'erreur en français
            'demandeur_type.required' => 'Veuillez indiquer si vous êtes une entreprise ou un particulier.',
            'demandeur_type.in'       => 'Profil invalide.',
            'company.required_if'     => 'Le nom de l\'entreprise est obligatoire.',
            'name.required'           => 'Le nom complet est obligatoire.',
            'name.min'                => 'Le nom doit contenir au moins 2 caractères.',
            'email.required'          => 'L\'adresse email est obligatoire.',
            'email.email'             => 'L\'adresse email n\'est pas valide.',
            'phone.required'          => 'Le numéro WhatsApp est obligatoire.',
            'role.required'           => 'Veuillez indiquer votre rôle / poste.',
            'service.required'        => 'Veuillez sélectionner un service.',
            'message.required'        => 'Le message est obligatoire.',
            'message.max'             => 'Le message ne doit pas dépasser 2000 caractères.',
        ]);

        // Si "Autre" → combiner service + précision
        if ($request->service === 'Autre' && $request->service_autre) {
            $validated['service'] = 'Autre : ' . $request->service_autre;
        }

        // Nettoyer les champs non stockés
        unset($validated['service_autre']);

        // Sauvegarder en base de données
        $contact = Contact::create($validated);

        // Envoyer l'email de notification
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
