# Borrowed Book Controller


## [GET] Retrieve all borrowed book record




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/borrowedbook',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

[
 [
{
   "id": 3,
   "patron_id": 3,
   "copies": 11,
   "book_id": 9,
   "created_at": "2021-01-04T05:53:36.000000Z",
   "updated_at": "2021-01-04T05:53:36.000000Z",
   "patron": {
       "id": 3,
       "last_name": "Gaylord",
       "first_name": "Tristian",
       "middle_name": "Berge",
       "email": "aleen54@gmail.com",
       "created_at": "2021-01-04T05:53:36.000000Z",
       "updated_at": "2021-01-04T05:53:36.000000Z"
   },
   "book": {
       "id": 9,
       "name": "ut",
       "author": "Prof. Russel Cartwright II",
       "copies": 168,
       "category_id": 9,
       "created_at": "2021-01-04T05:53:36.000000Z",
       "updated_at": "2021-01-04T05:53:36.000000Z",
       "category": {
           "id": 9,
           "category": "Novel",
           "created_at": "2021-01-04T05:53:36.000000Z",
           "updated_at": "2021-01-04T05:53:36.000000Z"
       }
   }
},
{
   "id": 4,
   "patron_id": 5,
   "copies": 19,
   "book_id": 11,
   "created_at": "2021-01-04T05:53:36.000000Z",
   "updated_at": "2021-01-04T05:53:36.000000Z",
   "patron": {
       "id": 5,
       "last_name": "Green",
       "first_name": "Pasquale",
       "middle_name": "Dicki",
       "email": "skiles.jayme@yahoo.com",
       "created_at": "2021-01-04T05:53:36.000000Z",
       "updated_at": "2021-01-04T05:53:36.000000Z"
   },
   "book": {
       "id": 11,
       "name": "officia",
       "author": "Hiram Hettinger",
       "copies": 126,
       "category_id": 11,
       "created_at": "2021-01-04T05:53:36.000000Z",
       "updated_at": "2021-01-04T05:53:36.000000Z",
       "category": {
           "id": 11,
           "category": "Science",
           "created_at": "2021-01-04T05:53:36.000000Z",
           "updated_at": "2021-01-04T05:53:36.000000Z"
       }
   }
}
]
```
<div id="execution-results-GETapi-borrowedbook" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-borrowedbook"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-borrowedbook"></code></pre>
</div>
<div id="execution-error-GETapi-borrowedbook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-borrowedbook"></code></pre>
</div>
<form id="form-GETapi-borrowedbook" data-method="GET" data-path="api/borrowedbook" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-borrowedbook', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/borrowedbook</code></b>
</p>
</form>


## [POST] Stores Borrowedbook.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/borrowedbook',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'book_id' => 1,
            'copies' => 19,
            'patron_id' => 15,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (422):

```json
{
    "book_id": [
        "Book doesn't exist in the database"
    ],
    "patron_id": [
        "Patron doesn't exist in the database"
    ]
}
```
<div id="execution-results-POSTapi-borrowedbook" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-borrowedbook"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-borrowedbook"></code></pre>
</div>
<div id="execution-error-POSTapi-borrowedbook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-borrowedbook"></code></pre>
</div>
<form id="form-POSTapi-borrowedbook" data-method="POST" data-path="api/borrowedbook" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-borrowedbook', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/borrowedbook</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>book_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book_id" data-endpoint="POSTapi-borrowedbook" data-component="body" required  hidden>
<br>
Book id must exist in the book table.</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="POSTapi-borrowedbook" data-component="body" required  hidden>
<br>
Must not exceed copies of book.</p>
<p>
<b><code>patron_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="patron_id" data-endpoint="POSTapi-borrowedbook" data-component="body" required  hidden>
<br>
Must exist in the patron table.</p>

</form>



