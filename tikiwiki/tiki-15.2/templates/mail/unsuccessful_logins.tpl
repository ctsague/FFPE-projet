{* $Id: unsuccessful_logins.tpl 58605 2016-05-16 13:25:32Z eromneg $ *}
{$msg}
{tr}Please visit this {$prefs.mail_template_custom_text}link before logging in again:{/tr}
{$mail_machine}?user={$user|escape:'url'}&pass={$mail_apass}

{tr}Last attempt:{/tr} {tr}IP:{/tr} {$mail_ip}, {tr}User:{/tr} {$user}
