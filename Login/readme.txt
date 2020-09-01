My Login Template
[1] Index.php: Form + Simple Error Show php Code

[2] processindex.php: After Submition, go to this page and By pass SQL injection and check Authentication. if fail to be authentic person , this page forword you to index.php with error message. 

[3] connectdb.php : included in processindex.php. Just sore database name and connection : (Neccessary Variable : $link)


[4] success.php: this display your are authentic person and logout link

[5] logout.php : Logout an authentic user and go back to index.php. 