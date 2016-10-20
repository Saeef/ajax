# Ajax

![Ajax](/images/ajax.gif?raw=true "Ajax")

<br />

## Folders:

### 1. Ajax folder
   contains my notes for making Ajax calls with JavaScript, and jQuery in a local server     
   environment, and sending HTTP requests, retrieving JSON data from RESTful APIs.               
### 2. Public folder
   contains examples i've constructed to extract JSON data using Ajax with both     
   JavaScript, and jQuery locally, and using an external API.



-  `XMLHttpRequest` object very simple break down (see aboutAjax.md)
-  JS and jQuery methods and a few examples
-  About __client.html__ file

	-  It's an example of __`data-binding`__ without angular

	- __`onkeyup`__ a value entered into input field, is captured by __`$_GET`__, and converted   
	      to uppercase inside of __`server.php`__   

	-  a new __`XMLHttpRequest`__ object inside of a function in __`client.html`__, then processes this         
           data, connects to __`server.php`__ and serves it back to the client browser __`asynchronously`__.   


- About __clientjQuery.html__ file    

	- It applies all 3 methods: __$.get__, __$.post__, and __$.ajax__.         
	- It's easier compared to using Javascript: we don't have to create an instance of __XMLHttpRequest__ object.    
	- We don't even need to pass the parameters in the __URL__ for __GET__. __JQuery__ does that for __u__.
	   
- About __gitclient.html__ file

	- Extracts data asynchronously from __GitHub API__ using __JavaScript/Ajax__.
	   

- About __planet.html__ file

	- Matches strings input in the client browser to an array in a __PHP__ server file using __Ajax__, response is sent         
	  back as a __JSON__ object, and parsed back into the client with __jQuery__.          
	


---
### Public folder notes:
- __Another example__, but this time using the __`GitHub API`__ to extract some data/stats stored for my profile page.
- __URL to my stuff (API)__:  https://api.github.com/users/stefan22
- To do that I need a form, where I would be entering my github profile __username__ and __GET__ upon submission,
  the entire JSON file, shown at the above URL, __in return__. <br /><br />
  __Looking back__:
- Spent most of my time on an error I got parsing my `secret key` (Part of the Auth). Eventually, I managed
  to fix the problem using JSON.stringify(). __But__,
- only to find out that `it wasn't even necessary`, in order to `retrieve the data`.
- __Another problem__ I encountered using __JS__ to access key-value data pairs, was that I wasn't getting an object     
  back from the __GitHub API__. I tried a bunch of things ( I thought about using the __substr__ method to remove the     
  outer quotes, but didn't want to do that), so instead, I ended up creating a self-executable __closure__ function to     
  return the __parsed JSON data__, and set my headers to __JSON data-type__. I possibly over complicated myself, but it     
  turned out good. __(see gitclient.html,line 31  >> ie. console.log(json(response)); <<)__.
  
- Other than that nOthIng... I could try maybe using jQuery next time, `too lazy to CDN in a Sunday`.

<br />

###  For ___troubleshooting___ Cross-Origin Resource Sharing (CORS) try link below: 

<p>Helpful documentation: 
<a href="https://cloud.google.com/storage/docs/cross-origin#Troubleshooting%20CORS-Related-Problems">Google Cloud Platform</a>
</p>

-  For __another day__, I've noticed the number of repos it pulled out was only 43. That's 
   less than half of all    
   of my repos.  It's just doing them for one page, so next time I should try looking into the API to get that fixed. 

-  __About the 43 repos issue__: error on my part. I picked __repos_url__ out of the JSON 
   object returned to me, and then proceeded to apply the length method to it.
   But if you `scroll down` the returned JSON object, you'll see another __key-value__ pair near the bottom named: __public_repos__. There's no need to apply any length method either, it returns the total number of public repos a user has via dot notation.
   
-  whatever else I find relevant...it will go here
<br />
```
Requires:

-   I'm also using XAMPP (OSX).  
-   If problems starting local server, check ports - I had to changed   
    my default port config(3306). That's all.    
-   Served at localhost and htdocs it's your root folder.    	
```

<hr />

#### Found interesting:   
1. __Apigee.com__ 
provides developers `tools` and `services` to `manage` __APIs__      
	- Most popular __RESTful APIs__ are easily found here - and it has a nice __API console__,               
  	  where you can try/ run all your queries.               

2. __Getpostman.com__  web REST client tool for monitoring HTTP requests and      
  responses, or creating and sending HTTP requests to APIs. Also testing etc.
  

<hr />


<br />

> **XMLHttpRequest** is an API that provides client functionality for transferring data between a client and a server. 
> It provides an easy way to retrieve data from a URL without having to do a full page refresh. - __from MDN__. 
