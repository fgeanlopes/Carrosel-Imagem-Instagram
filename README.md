# Add an instagram image carousel on your website
solution to add instagram image carousel straight to your website

How add? 

Run --> Download the project files at https://github.com/fgeanlopes/add_instagram_my_website and add the files to your localhost


1 - Instagram permission

Acess: https://www.instagram.com/developer/clients/manage/

1-1 -> Click buttton "Register Your Application"
1-2 -> Fill -> Application Name:
1-3 -> Fill -> Website URL:
1-4 -> Fill -> Valid redirect URIs: use -> http://instafeedjs.com
1-5 -> Acess (Tab Security)
1-6 -> Desable options ->  Disable implicit OAuth:
1-7 -> Click button "register"
1-8 -> Copy generated client id


2 - Generate access token.
2-1 Copy this link -> https://instagram.com/oauth/authorize/?client_id=[Client ID]&redirect_uri=http://instafeedjs.com&response_type=token
2-2 Add the [Client id] of the copied link in step 1-8
2-3 Paste link changed in browser and go to page and give permission requested by instagram
2-4 Copy userId and accessToken generated.


3-1 Access the project index.php file
3-2 Change the variable $access_token and $number_of_user_id of the copied link in step 2-4

Fish! Open the site in browser

Obs: You can change the number of photos in index.php -> $number_of_photos approximately line:34
Obs: Instagram allows to list at most the last 20 photos.