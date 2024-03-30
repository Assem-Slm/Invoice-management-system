<?php
// Debugging
ini_set('error_reporting', E_ALL);

// DATABASE INFORMATION
define('DATABASE_HOST', getenv('IP'));
define('DATABASE_NAME', 'invoicemgsys');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', '');

// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo1.png');
define('COMPANY_LOGO_WIDTH', '300');
define('COMPANY_LOGO_HEIGHT', '90');
define('COMPANY_NAME','Beirut Supplements');
define('COMPANY_ADDRESS_1','Sham Main Road');
define('COMPANY_ADDRESS_2','Anjar');
define('COMPANY_ADDRESS_3','Bekaa');
define('COMPANY_COUNTY','Lebanon');
define('COMPANY_POSTCODE','1801');

define('COMPANY_NUMBER','Store No: 76666639'); //.......................... Company registration number
define('COMPANY_VAT', 'Company VAT: 65658576'); //......................... Company TAX/VAT number

// EMAIL DETAILS
define('EMAIL_FROM', 'sales@Beirut Supplements.ccc'); //.................... Email address invoice emails will be sent from
define('EMAIL_NAME', 'Beirut Supplements'); //.............................. Email from address
define('EMAIL_SUBJECT', 'Invoice default email subject'); // ................Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice default body'); // ....................Invoice email body
define('EMAIL_BODY_QUOTE', 'Quote default body'); // ........................Invoice email body
define('EMAIL_BODY_RECEIPT', 'Receipt default body'); // ....................Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'MD'); // ..........................................Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1'); // ....................................Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // ......................................Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Lebanon'); // ...........................................Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); //......................................DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', '$'); // .................................................Currency symbol
define('ENABLE_VAT', true); // ..............................................Enable TAX/VAT
define('VAT_INCLUDED', false); // ...........................................Is VAT included or excluded?
define('VAT_RATE', '11'); // ................................................This is the percentage value

define('PAYMENT_DETAILS', 'Beirut Supplements.<br>Sort Code: 00-00-00<br>Account Number: 12345678'); // Payment information
define('FOOTER_NOTE', 'Invoice Management System');

// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

?>