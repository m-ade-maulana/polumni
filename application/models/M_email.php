<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_email extends CI_Model
{
    public function message($toEmail, $username, $password, $token)
    {
        $subject = 'Notification - noreply';
        $mes = '
            <!DOCTYPE html>
            <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width,initial-scale=1">
                    <meta name="x-apple-disable-message-reformatting">
                    <title></title>
                    <style>
                        table,
                        td,
                        div,
                        h1,
                        p {
                            font-family: Arial, sans-serif;
                        }
                    </style>
                </head>

                <body style="margin:0;padding:0;">
                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                        <tr>
                            <td align="center" style="padding:0;">
                                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                                    <tr>
                                        <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                                            <img src="cid:logo_src" alt="" width="300" style="height:auto;display:block;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:36px 30px 42px 30px;">
                                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                <tr>
                                                    <td style="padding:0 0 36px 0;color:#153643;">
                                                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif; text-align: center;" >Email Notification</h1>
                                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif; text-align: center;">Ini adalah email notifikasi berisikan username dan password anda</p>
                                                        <p>Username : ' . $username . '</p>
                                                        <p>Password : ' . $password . '</p>
                                                        <p>Token : ' . $token . '</p>
                                                        <p>Harap mengganti password anda setelah mengisi biodata anda</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:30px;background:#ee4c50;">
                                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                                <tr>
                                                    <td style="padding:0;width:50%;" align="left">
                                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                                            &reg; Kans developer, SMK Nusantara 1 2021<br />
                                                        </p>
                                                    </td>
                                                    <td style="padding:0;width:50%;" align="right">
                                                        <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                                                            <tr>
                                                                <td style="padding:0 0 0 10px;width:38px;">
                                                                    <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                                                </td>
                                                                <td style="padding:0 0 0 10px;width:38px;">
                                                                    <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                                                </td>
                                                            </tr>
                                                        </table>
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

        ';

        $file_logo = FCPATH . 'assets/img/logo.png';
        $this->email->attach($file_logo, 'inline', null, '', true);
        $cid_logo = $this->email->attachment_cid($file_logo);
        $body = str_replace('cid:logo_src', 'cid:' . $cid_logo, $mes);
        $sending = $this->email
            ->from('admin@smk-nusantara1-kotang.sch.id')
            ->to($toEmail)
            ->subject($subject)
            ->message($body)
            ->send();
        return $sending;
    }
}
