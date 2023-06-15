// Εισάγουμε τη βιβλιοθήκη OTP.js
import * as OTP from 'otp.js';

// Δημιουργούμε ένα secret key το οποίο θα χρησιμοποιηθεί για τη δημιουργία του OTP
const secret = 'mysecretkey';

// Δημιουργούμε έναν generator που θα χρησιμοποιηθεί για τη δημιουργία του OTP
const generator = new OTP.Generator({
  secret,
  algorithm: 'SHA1',
  digits: 6,
  period: 30,
});

// Λαμβάνουμε τον πρώτο κωδικό OTP
const otp = generator.generate();

// Εμφανίζουμε τον κωδικό στην ιστοσελίδα
document.getElementById('otp').innerHTML = otp;



