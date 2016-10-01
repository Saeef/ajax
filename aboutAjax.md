Implementing Ajax using JavaScript & jQuery
=============================================

### about ajax
==============

- stands for asynchronous javascript
- update a small section of a page without reloading
- sends a request to the server without changing the page
- server, receives it, process it and sends response back
- client browser updates section

#### Ex: search box analogy -- ajax
===================================
- first thing that happens as user starts typing:

	*	client browser sends a request to the server without changing
		the page, along with search terms entered by user 		
	*	server receives request, along with search terms and sends the response
		back - in this case, a list of possible suggestions




### ajax in JS
==============

- client loads web page
- request to the server
- receiving response from server
- updating the page



### XMLHttpRequest object (interacts with a server to:)
========================================================

- request to Server,
- receiving Response and 
- updating the Page


##### XMLHttpRequest Object Sample
==================================


```
		var http = new XMLHttpRequest();
		
		http.onreadystatechange = function() {

			if (http.readyState == 4 && http.status == 200) {
				// Write some code to update web page
			}

		};

		http.open("GET", "some_server_url", true);
		http.send();

```

* What's happening here above:

- 	create your `new instance`, and
- 	apply to it the `onreadystatechange` method; which 
- 	would then parse your data through a function, but 
-	first will do some checkings to make sure data has been
  	`received` `successfully` by the client using some
  	`readystate` and `status` object properties checks, and if
- 	true, it will then proceed to make whatever code update/changes.

- 	the two lines at the bottom, has to do with the actual connection
	to a server.
-  	http.open handles the method parameters. Whether is GET or POST,
  	to connect to the server asynchronously, and 
  	`pass the server's url`, and last:
- 	send() function to send your data. Send() without parameters, assumes
        GET, and it's empty cause parameters sent via the URL. POST, will 
        have something like `send(data)`; which will contain the message.



### XMLHTTpRequest
==================

- use to interact with the server,
- use to send a request to server,
- receive a response to the server

1) readyState (property)
-  used to determine the current status of request
-  its value ranges from 0 to 4

-		0: request not initialized by client yet
-		1: connection is established with server
-		2: request is received by server
-		3: server is processing request
-		4: response is ready and received by client

2. status
-  it specifies if request was successful or not

-		200: OK ex: request was successful
-		404: page not found


3. Onreadystatechange
-  it's a function which run everytinme the value of readyState changes
-  this function will be called whenever readyState value changes from
   0 to 1, 1 to 2, 2 to 3, and 3 to 4.

4. open(method, server url, asynchronous)
-  a method use to specify the connection parameters
-  method refers to GET or POST
-  the url where the server request from the client is going to be send up
-  asynchronous - value of false

5. send()
-  send(), without any parameters for GET method - cause send through url
-  send(data), with parameter-data inside of it, for POST method


#### XMLHttpRequest -> properties to receive response to server
===================

1. responseText: This contains the response from the server as text
2. responseXML:  This receives the response from the server as XML






