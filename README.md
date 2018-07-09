Website originally developed by Frost Digital

You'll need a lamp server

Download latest version of wordpress from https://wordpress.org/latest.zip.

Unzip the file.  Put the contents inside app/shared/ folder.

Update wp-config.php file with database details.

Run the command curl -s https://api.wordpress.org/secret-key/1.1/salt/

Replace the default section of the wp-config.php file

Restore a copy of the database to the remote server db server

Restore a copy of the uploads folder

Run cap production deploy.
