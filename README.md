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

---

- __Another example__, but this time using the __`GitHub API`__ to extract some data/stats stored for my profile page.
- __URL to my stuff (API)__:  https://api.github.com/users/stefan22
- To do that I need a form, where I would be entering my github profile __username__ and __GET__ upon submission,
  the entire JSON file, shown at the above URL, __in return__. <br /><br />
  __Looking back__:
- Spent most of my time on an error I got parsing my `secret key` (Part of the Auth). Eventually, I managed
  to fix the problem using JSON.stringify(). __But__,
- only to find out that `it wasn't even necessary`, in order to `retrieve the data`.
- Other than that nOthIng... I could try maybe using jQuery next time, `too lazy to CDN in a Sunday`.

<br />
<br />
###  For ___troubleshooting___ Cross-Origin Resource Sharing (CORS) try link below: 

<p>Helpful documentation: 
<a href="https://cloud.google.com/storage/docs/cross-origin#Troubleshooting%20CORS-Related-Problems">Google Cloud Platform</a>
</p>
-  whatever else I find relevant...it will go here

```
Requires:

-   I'm also using XAMPP (OSX).  
-   If problems starting local server, check ports - I had to changed   
    my default port config(3306). That's all.    
-   Served at localhost and htdocs it's your root folder.    

	
```

<br />
<hr />

> **XMLHttpRequest** is an API that provides client functionality for transferring data between a client and a server. 
> It provides an easy way to retrieve data from a URL without having to do a full page refresh. - __from MDN__. 
