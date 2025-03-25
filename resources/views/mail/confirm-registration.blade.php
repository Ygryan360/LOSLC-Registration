<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmation d'inscription - LOSLC</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- Conteneur principal -->
        <tr>
            <td align="center" bgcolor="#f4f4f4" style="padding: 20px;">
                <table border="0" cellpadding="0" cellspacing="0" width="600"
                    style="max-width: 600px; border-radius: 8px; overflow: hidden;">
                    <!-- En-tête -->
                    <tr>
                        <td bgcolor="#1e2a36" style="padding: 20px 0; text-align: center;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <!-- Logo LOSLC -->
                                    <td width="50%" style="padding: 10px;">
                                        <img src="https://loslc.alwaysdata.net/white_cropped.png" alt="LOSLC Logo"
                                            width="120"
                                            style="display: block; max-width: 100%; height: auto; margin: 0 auto;" />
                                    </td>
                                    <!-- Logo Ethix -->
                                    <td width="50%" style="padding: 10px;">
                                        <img src="https://loslc.alwaysdata.net/ethix_logo_1k_nobg_cropped.png"
                                            alt="Ethix Logo" width="120"
                                            style="display: block; max-width: 100%; height: auto; margin: 0 auto;" />
                                    </td>
                                </tr>
                            </table>
                            <!-- Tableau pour mobile : empiler les logos -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="display: none; mso-hide: all;">
                                <tr>
                                    <td style="padding: 10px;">
                                        <img src="https://loslc.alwaysdata.net/white_cropped.png" alt="LOSLC Logo"
                                            width="120"
                                            style="display: block; max-width: 100%; height: auto; margin: 0 auto;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px;">
                                        <img src="https://loslc.alwaysdata.net/ethix_logo_1k_nobg_cropped.png"
                                            alt="Ethix Logo" width="120"
                                            style="display: block; max-width: 100%; height: auto; margin: 0 auto;" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Corps -->
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px; color: #333333;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td
                                        style="font-size: 24px; font-weight: bold; color: #5076f6; text-align: center; padding-bottom: 20px;">
                                        Inscription confirmée !
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; line-height: 24px; color: #333333; text-align: center;">
                                        Bonjour {{ $registration->name }},<br><br>
                                        Nous sommes ravis de confirmer votre inscription au tournoi de la <strong>LOSLC
                                            & ETHIX</strong> ! Voici les détails de votre participation :
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                            style="background-color: #1e2a36; border-radius: 5px;">
                                            <tr>
                                                <td style="padding: 20px; color: #e0e0e0; font-size: 16px;">
                                                    <strong>Nom :</strong> {{ $registration->name }}<br>
                                                    <strong>Téléphone :</strong> {{ $registration->phone }}<br>
                                                    <strong>Email :</strong> {{ $registration->email }}<br>
                                                    <strong>Type de tournoi :</strong>
                                                    {{ $registration->tournament_type }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; line-height: 24px; color: #333333; text-align: center;">
                                        Préparez-vous à montrer vos talents ! Plus d'informations sur le tournoi vous
                                        seront envoyées prochainement.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; padding-top: 30px;">
                                        <a href="{{ url('/') }}"
                                            style="background-color: #5076f6; color: #ffffff; padding: 12px 25px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;">
                                            Visiter le site
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Pied de page -->
                    <tr>
                        <td bgcolor="#1e2a36"
                            style="padding: 20px 30px; color: #e0e0e0; font-size: 14px; text-align: center;">
                            <p style="margin: 0;">© 2025 Linux & Open Source Lovers Community. Tous droits réservés.</p>
                            <p style="margin: 10px 0 0;">Contactez-nous : <a href="mailto:loslcommunity@gmail.com"
                                    style="color: #5076f6; text-decoration: none;">loslcommunity@gmail.com</a></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
