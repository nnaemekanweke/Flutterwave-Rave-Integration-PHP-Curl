# Flutterwave Rave Integration (PHP 7,8 Curl)
Use this code to integrate your PHP app to Flutterwave Payment Gateway.


Use this code to integrate your PHP app to Flutterwave Payment Gateway.

Edit the `pay.php` and `confirmPayment.php` files to suit your purpose. Both files are well documented.

Simply redirect to the `pay.php` file on your browser to process a payment.

## Sample implementation

In this implementation, a form encoded POST request is expected to this script.
The request will contain the following parameters.

- payment_method `Can be card, account, both`
- description `Your transaction description`
- logo `Your logo url`
- title `Your transaction title`
- country `Your transaction country`
- currency `Your transaction currency`
- email `Your customer's email`
- firstname `Your customer's first name`
- lastname `Your customer's last name`
- phone_number `Your customer's phonenumber`
- pay_button_text `The payment button text you prefer`
- ref `Your transaction reference. It must be unique per transaction.  By default, the Rave class generates a unique transaction reference for each transaction. Pass this parameter only if you uncommented the related section in the script below.`

## Credits

- [Nnaemeka Nweke (Codegenty)][https://twitter.com/codegenty]

## Test cards

The cards cover a variety of use cases and simulations for failed and successful transactions with specific messages.

Test MasterCard PIN authentication
Card number: 5531 8866 5214 2950
cvv: 564
Expiry: 09/32
Pin: 3310
OTP: 12345

Test Visa Card 3D-Secure authentication (VBVSECURECODE)
Card number: 4187 4274 1556 4246
cvv: 828
Expiry: 09/32
Pin: 3310
OTP: 12345

Address Verification (AVS) Card
Card number: 4556052704172643
cvv: 899
Expiry: 09/32
Pin: 3310
OTP: 12345

Test MasterCard 3DSecure authentication (VBVSECURECODE)
Card number: 5438 8980 1456 0229

cvv: 564

Expiry: 10/31

Pin: 3310

OTP: 12345

Test Mastercard PIN 2
Card number: 5399 8383 8383 8381

cvv: 470

Expiry: 10/31

Pin: 3310

OTP: 12345

Test VBVSECURECODE Card
Card number: 4751 7632 3669 9647

Expiry: 09/35

Test VisaCard 3D-Secure Authentication
Card number: 4242 4242 4242 4242

cvv: 812

Expiry: 01/31

Pin: 3310

OTP: 12345

Test Verve Card (PIN)
Card number: 5061 4604 1012 0223 210

cvv: 780

Expiry Month: 12

Expiry Year: 31

Pin: 3310

OTP: 12345

Test card Declined (Address Verification)
Card number: 5143 0105 2233 9965

cvv: 276

Expiry: 08/32

Pin: 3310

Test Card Fraudulent
Card number: 5590 1317 4329 4314

cvv: 887

Expiry: 11/32

Pin: 3310

OTP: 12345

Test Card Insufficient Funds
Card number: 5258 5859 2266 6506

cvv: 883

Expiry: 09/31

Pin: 3310

OTP: 12345

Pre-authorization Test Card
Card number: 5377 2836 4507 7450

cvv: 789

Expiry: 09/31

Pin: 3310

Test card - Do Not Honour
Card number: 5143010522339965

cvv: 276

Expiry: 08/31

Pin: 3310

Test Card - Insufficient Funds
Card number: 5258585922666506

cvv: 883

Expiry: 09/31

Pin: 3310

OTP: 12345

Test Card - Invalid Transaction
Card number: 5551658157653822

cvv: 276

Expiry: 08/31

Test Card - Restricted Card, Retain Card
Card number: 5551651630381384

cvv: 276

Expiry: 08/31

Test Card - Function Not Permitted to Cardholder
Card number: 5258582054729020

cvv: 887

Expiry: 11/30

Test Card - Function Not Permitted to Terminal
Card number: 5258588264565682

cvv: 887

Expiry: 11/30

Test Card - Transaction Error
Card number: 5258589130149016

cvv: 887

Expiry: 11/30

Test Card - Incorrect PIN
Card number: 5399834697894723

cvv: 883

Expiry: 09/31

Pin: 3310

OTP: 12345

Test Verve Card - Card enrolment
Card number: 5531882884804517

cvv: 564,

Expiry: 10/32,

Pin: 3310


> If there are features you need urgently, I will be willing to prioritize them, please reach out to my twitter account
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.



