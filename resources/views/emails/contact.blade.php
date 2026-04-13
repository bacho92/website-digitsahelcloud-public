<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background:#f1f5f9; margin:0; padding:20px; }
        .container { max-width:600px; margin:0 auto; background:white;
                     border-radius:16px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,.1); }
        .header { background:linear-gradient(135deg,#152a6b,#1E388A);
                  padding:32px; text-align:center; }
        .header h1 { color:white; font-size:22px; margin:0 0 8px; }
        .header p { color:rgba(255,255,255,.7); font-size:14px; margin:0; }
        .body { padding:32px; }
        .field { margin-bottom:20px; padding:16px; background:#f8fafc;
                 border-radius:10px; border-left:4px solid #1E388A; }
        .field label { font-size:11px; font-weight:700; color:#6B7280;
                       text-transform:uppercase; letter-spacing:.5px; display:block; margin-bottom:6px; }
        .field p { color:#1F2937; font-size:15px; margin:0; line-height:1.6; }
        .field.orange { border-left-color:#F97316; }
        .footer { background:#1F2937; padding:20px; text-align:center; }
        .footer p { color:rgba(255,255,255,.6); font-size:12px; margin:0; }
        .footer span { color:#F97316; font-weight:700; }
    </style>
</head>
<body>
    <div class="container">

        <div class="header">
            <h1>📩 Nouveau message reçu</h1>
            <p>DigitSahelCloud — Formulaire de contact</p>
        </div>

        <div class="body">
            <div class="field">
                <label>Nom complet</label>
                <p>{{ $contact->name }}</p>
            </div>
            <div class="field orange">
                <label>Email</label>
                <p>{{ $contact->email }}</p>
            </div>
            <div class="field">
                <label>Téléphone</label>
                <p>{{ $contact->phone ?? 'Non renseigné' }}</p>
            </div>
            <div class="field orange">
                <label>Service souhaité</label>
                <p>{{ $contact->service ?? 'Non renseigné' }}</p>
            </div>
            <div class="field">
                <label>Message</label>
                <p>{{ $contact->message }}</p>
            </div>
            <div style="margin-top:24px; padding:16px; background:#EEF2FF;
                        border-radius:10px; text-align:center;">
                <p style="color:#1E388A; font-size:13px; margin:0;">
                    Reçu le {{ $contact->created_at->format('d/m/Y à H:i') }}
                </p>
            </div>
        </div>

        <div class="footer">
            <p>© {{ date('Y') }} <span>DigitSahelCloud</span> — Niamey, Niger</p>
        </div>
    </div>
</body>
</html>