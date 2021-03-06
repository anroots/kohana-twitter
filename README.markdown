Kohana-Twitter
==============

...is an example web-app built with the [Kohana 3.2](http://kohanaframework.org) PHP framework and Twitter's own [Bootstrap CSS toolkit](http://twitter.github.com/bootstrap/).

The code is meant as an example on how easy and fast it is to build something using a decent framework (Kohana), ORM ORM and Kohana modules.

Capabilities
------------

The application can:

* Login a user
* Logout a user
* Let the user post (tweet)
* Show the user his/her past posts
* Delete a post

This is the bare minimum of features and could be easily extended with:

* Sign up a new user
* Viewing of other user's posts
* Adding and managing friends
* Replying with the @ character
* etc...

My motivation
-------------

This is my attempt to demonstrate that using frameworks and libraries help developers
create a small-to-medium scale application far more stress free and faster than using nothing at all and avoiding objects
in favour of functions to give the application every ounce of server-sided speed.

Frameworks DO slow things down a bit on the server side, but nowadays CPU time is cheap, especially when you don't expect
tens of thousands of requests every second and use scalable platforms (Heroku).

In addition, using a framework often helps to improve the quality of your code by teaching you about best practices and conventions.

The project took around 3 hours to build, from scratch. Imagine how long it would have taken had I started without any external
help whatsoever, writing my own SQL statements and routing...scary!

Setting up a local copy and more
--------------------------------

To setup a local working version of this, download and put the files at your web root, setup the
database using the included SQL and change 2 files:

* application/config/database.php with your database settings
* application/bootstrap.php with your base_url

Blog post about the repository:
[http://ando.roots.ee/wp/2011/08/thats-how-easy-it-is-to-create-twitter-with-kohana-3/](http://ando.roots.ee/wp/2011/08/thats-how-easy-it-is-to-create-twitter-with-kohana-3/)
