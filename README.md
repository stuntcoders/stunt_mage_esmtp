# StuntCoders External Smtp Magento Module

Esmtp module allows sending transactional mails via external smtp server, allowing for easy integration with transactional mail delivery services like [SendGrid](https://sendgrid.com/), [Mailjet](https://www.mailjet.com/), [Mandrill](https://www.mandrill.com/) and others.

## Configuration

Module supports multiple authentication types:
* None
* Login
* Plain
* CRAM-MD5

Optinally *SSL* or *TLS* encription can be used.

![System config](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_esmtp/esmtp-system-config.png)

### Sample configuration

* Sendgrid
    * Host: _smtp.sendgrid.com_
    * Port: _587_
    * Auth type:  _Login_
    * Username: _Username_
    * Password: _Password_
    * Encription: _TLS_
* Mailjet
    * Host: _in-v3.mailjet.com_
    * Port: 465
    * Auth type:  _Login_
    * Username: _Api ley_
    * Password: _Api secret_
    * Encription: _SSL_
* Sendgrid
    * Host: _smtp.mandrillapp.com_
    * Port: _587_
    * Auth type:  _Login_
    * Username: _Username_
    * Password: _Password_
    * Encription: _TLS_

Copyright StuntCoders — [Start Your Online Store Now](https://stuntcoders.com/)
