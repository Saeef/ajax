Implementing Ajax using jQuery
==============================

### Ajax in Jquery

Typically we run __$_GET__ or __$POST__ and execute a function once we have received
a success response from server.    
In jQuery, we have __$.get__ and __$.post__     
They're both great at doing __Ajax__ but provide very little control over the execution of Ajax.   
`So what about if there's an error?`    
__Answer__-> $.ajax `(provides a lot more functionality than $.get and $.post)`
You can perform both __GET__ and __POST__ Ajax using __$.ajax__
<br />

```
syntax:
=======
				$.ajax({

					param1: paramValue1,
					param2: paramValue2

				})


```


### Some of the Parameters Available in $.ajax

-  __URL__: this is the `request` send `from` the `client` `to` the `server` or            
            the URL, where you'll send the request. **(server url)**

-  __data__: data to be sent to the server.

-  __dataType__: type of data to be expected back from the server (text, html)

-  __type__: where you specify whether to use GET or POST

- __beforeSend(http)__: it contains a function, that gets executed before client    
                        starts sending any data request to the server.     
                        It has a parameter available; which is http, and     
                        this is an object of type XMLHttpRequest

- __success(response_data, status, http)__: a function that runs upon receiving a    
                                            successful response from server

      *  __success__ is a function available in $.get and $.post.                                

      *  response we get back from server is stored in __response_data__

      
      *  __status__:  contains the status of the Ajax instance

      *  __http__:  an object of type XMLHttpRequest


- __error(http, status, error)__: a function that gets executed, if there's any error
								  during the execution of Ajax.


	__error__ parameter: contains the kind of error it encounters/occurred.							  

- __complete(http, status)__: a function that gets executed when ajax's execution   
							  is completed. It's call after completion.  





























