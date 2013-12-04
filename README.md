 Veritrans VT-Web Drupal Commerce 
==================================

## How to use

###STEP 1 : Installing Veritrans Modules

- Login to drupal commerce using your admin account.
- Click on Modules Tab.
- Select Install New Module.
- Then, upload this zip folder and click Install.
- If this step works, skip STEP 2.


###STEP 2 :  Installing Veritrans Modules

- Extract this zip folder.
- Copy and Paste manually to sites/all/modules.


###STEP 3 : Activating Veritrans Modules

- After installation process is complete, go to Modules page.
- Give check list on Veritrans VT-Web's field.
- Save Configuration.

###STEP 4 : Setting Configuration for Veritrans Modules

- Click on Configure Store.
- Select Payment Method.
- Click Credit Card (Via Veritrans) -> Enable Payment Method.
- Enter your Merchant ID, Merchant Hashkey, and email.
- Save.

###STEP 5 : Preparing Database for Veritrans Modules

- Find tokens.sql in this zip folder.
- Import it on your database.

###STEP 6 : Setting Callback URL

- Login to veritrans.co.id.
- Go to Setting Page.
- Fill the redirection's field with [you shop's url]/sites/all/modules/commerce_veritrans/callback.php.
- Save the configuration.


