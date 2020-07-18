What i did with the code was to get the html returned from the url of the website we want to scrape. In
this case the website is pokemondb.net.

Then i declared a new Dom document, this is used for converting the html string 
returned from 'file_get_contents' into an actual document  object model which we can transvarse through.

Then we disabled libxml errors so that they won't be outputted on the screen, instead they will be buffered and stored.

Next i checked if there's an actual html that as been returned:

Next we use th LoadHtml() function from the new instance of DOMDocument that i created earlier to load the html
that was returned, Simply use the html that was returned as the argument..


Finally i simply write the query for the specific elements that i want to get. 