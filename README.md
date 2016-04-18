# StuntCoders External Smtp Magento Module

Esmtp module allows sending transactional mails via external smtp server, allowing for easy integration with transactional mail delivery services like [SendGrid](https://sendgrid.com/), [Mailjet](https://www.mailjet.com/), [Mandrill](https://www.mandrill.com/) and others.

## Configuration

Module supports multiple authentication types:
* None
* Login
* Plain
* CRAM-MD5

Optinally *SSL* or *TLS* encryption can be used.

![System config](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_esmtp/esmtp-system-config.png)

### Sample configuration

|              | Host                 | Port | Username   | Password     | Encryption |
|--------------|----------------------|------|------------|--------------|------------|
| **SendGrid** | smtp.sendgrid.com    | 587  | _Username_ | _Password_   | TLS        |
| **MailJet**  | in-v3.mailjet.com    | 465  | _Api key_  | _Api secret_ | SSL        |
| **Mandrill** | smtp.mandrillapp.com | 587  | _Username_ | _Password_   | TLS        |

Copyright StuntCoders — [Start Your Online Store Now](https://stuntcoders.com/)
