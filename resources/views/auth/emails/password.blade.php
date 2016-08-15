<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Choose a new password for MedicoMar</title>

</head>
<body style="width: 100% !important; height: 100%; line-height: 1.4; background-color: #F2F4F6; color: #74787E; -webkit-text-size-adjust: none; margin: 0;" bgcolor="#F2F4F6">
<table width="100%" cellpadding="0" cellspacing="0" style="width: 100%; background-color: #F2F4F6; margin: 0; padding: 0;" bgcolor="#F2F4F6">
    <tr>
        <td align="center">
            <table width="100%" cellpadding="0" cellspacing="0" style="width: 100%; margin: 0; padding: 0;">
                
                <tr>
                    <td style="text-align: center; padding: 25px 0;" align="center">
                        <a style="color: #D4202B; font-size: 16px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 white;">MedicoMar</a>
                    </td>
                </tr>
                
                <tr>
                    <td width="100%" style="width: 100%; border-top-width: 1px; border-top-style: solid; border-top-color: #EDEFF2; border-bottom-width: 1px; padding: 0; border-bottom-color: #EDEFF2; margin: 0; border-bottom-style: solid; background-color: #FFF;" bgcolor="#FFF">
                        <table align="center" width="570" cellpadding="0" cellspacing="0" style="width: 100% !important; margin: 0 auto; padding: 0;">
                            
                            <tr>
                                <td style="padding: 35px;">
                                    <h1 style="margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;" align="left">Salut {{ $user->hasRole('medecin') ? 'Dr. ' . $user->prenom : $user->prenom }},</h1>
                                    <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; text-align: left;" align="left">Vous avez récemment demandé de réinitialiser votre mot de passe pour votre compte MedicoMar. Cliquez sur le bouton ci-dessous pour réinitialiser.</p>
                                    
                                    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="width: 100%; text-align: center; margin: 30px auto; padding: 0;">
                                        <tr>
                                            <td align="center">
                                                <div>
                                                    
                                                    <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}" style="color: #ffffff; display: inline-block; width: 100% !important; border-radius: 3px; font-size: 15px; line-height: 45px; text-align: center; text-decoration: none; -webkit-text-size-adjust: none; mso-hide: all; background-color: #dc4d2f;">réinitialisez votre mot de passe</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; text-align: left;" align="left">Si vous n'avez pas demandé une réinitialisation de mot de passe, s'il vous plaît ignorer cet e-mail ou faites nous savoir.</p>
                                    <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; text-align: left;" align="left">Merci,<br />l'équipe MedicoMar
                                    </p>
                                    <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; text-align: left;" align="left">
                                        <strong>P.S.</strong> Nous aimons aussi vous entendre et vous aider avec tous les problèmes que vous avez. S'il vous plaît répondre à ce message si vous voulez poser une question ou juste dire salut.
                                    </p>
                                    
                                    <table style="margin-top: 25px; padding-top: 25px; border-top-width: 1px; border-top-color: #EDEFF2; border-top-style: solid;">
                                        <tr>
                                            <td>
                                                <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em; text-align: left;" align="left">Si vous éprouvez des difficultés en cliquant sur le bouton de réinitialisation de mot de passe, copiez et collez l'URL ci-dessous dans votre navigateur Web.</p>
                                                <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em; text-align: left;" align="left">
                                                    <a href="{{ $link }}" style="color: #3869D4;">{{$link}}</a></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table align="center" width="570" cellpadding="0" cellspacing="0" style="width: 100% !important; text-align: center; margin: 0 auto; padding: 0;">
                            <tr>
                                <td style="padding: 35px;">
                                    <p style="color: #D4202B; margin-top: 0; font-size: 12px; line-height: 1.5em; text-align: center;" align="center">© 2016 MedicoMar. All rights reserved.</p>
                                    <p style="color: #D4202B; margin-top: 0; font-size: 12px; line-height: 1.5em; text-align: center;" align="center">
                                        MedicoMar
                                        <br />contact@medicomar.com
                                        <br />nesyou2013@gmail.com </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
