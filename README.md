# Ajax  ...in progress

#### because I realized that I don't have any notes in Ajax.


-  `XMLHttpRequest` object very simple break down (see aboutAjax.md)
-  JS and jQuery methods and a few examples
-  About __client.html__ file

	-  It's an example of __`data-binding`__ without angular

	- __`onkeyup`__ a value entered into input field, is captured by __`$_GET`__, and converted   
	      to uppercase inside of __`server.php`__   

	-  a new __`XMLHttpRequest`__ object inside of a function in __`client.html`__, then processes this         
           data, connects to __`server.php`__ and serves it back to the client browser __`asynchronously`__.   	
	 
	 
-  whatever else I find relevant...it will go here

```
Requires:

-   I'm also using XAMPP (OSX).  
-   If problems starting local server, check ports - I had to changed   
    my default port config(3306). That's all.    
-   Served at localhost and htdocs its your root folder.    

	
```

<br />
<hr />

> **XMLHttpRequest** is an API that provides client functionality for transferring data between a client and a server. 
> It provides an easy way to retrieve data from a URL without having to do a full page refresh. - from MDN. 
