# Add an instagram image carousel on your website<br>
solution to add instagram image carousel straight to your website<br><br>

How add? <br>

Run --> Download the project files at https://github.com/fgeanlopes/add_instagram_my_website and add the files to your localhost<br><br>


1 - Instagram permission<br><br>

Acess: https://www.instagram.com/developer/clients/manage/<br>

1-1 -> Click buttton "Register Your Application"<br>
1-2 -> Fill -> Application Name:<br>
1-3 -> Fill -> Website URL:<br>
1-4 -> Fill -> Valid redirect URIs: use -> http://instafeedjs.com<br>
1-5 -> Acess (Tab Security)<br>
1-6 -> Desable options ->  Disable implicit OAuth:<br>
1-7 -> Click button "register"<br>
1-8 -> Copy generated client id<br><br><br>


2 - Generate access token.<br>
2-1 Copy this link -> https://instagram.com/oauth/authorize/?client_id=[Client ID]&redirect_uri=http://instafeedjs.com&response_type=token<br>
2-2 Add the [Client id] of the copied link in step 1-8<br>
2-3 Paste link changed in browser and go to page and give permission requested by instagram<br>
2-4 Copy userId and accessToken generated.<br><br><br>


3-1 Access the project index.php file<br>
3-2 Change the variable $access_token and $number_of_user_id of the copied link in step 2-4<br><br>

Fish! Open the site in browser<br><br>

Obs: You can change the number of photos in index.php -> $number_of_photos approximately line:34<br>
Obs: Instagram allows to list at most the last 20 photos.<br>