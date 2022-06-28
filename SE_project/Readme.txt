# International Conference Mangement System
Follow this steps to setup this site
1.To set this web application, make sure PHP and PHPMyAdmin installed in your server.
2.Next open PHPMyAdmin, create a database name it as "authentication" and import the authentication.sql file. This will generate tables in your database on your server.
3.The admin which I have made has an email id "admin@1.com" and the password is "admin1".

Steps:
Admin part:
1. Admin will login.
2. On logged in, admin can see current running conferences.
3. Now, he can make a new conference.
4. In any conference, he is the only one who can add users and reviewers for that conference by using add user and add reviewer buttons.
5. On the same page he can see all submissions and their reviews for any conference.

User part:
1. By the credentials provided by admin he can login.
2. After logged in he can make submissions only using shareable link by use of google drive or any other platforms ,only if deadline is not passed.
3. On that page, he can also see his submission's review.

Reviewer part:
1. By the credentials provided by admin he can login to review those users associated with corresponding conference.
2. After logged in, he can see all users' submission and can review by entering user id and type of review.
