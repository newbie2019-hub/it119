# Returned Book Controller


## [GET] Retrieves all returned book.


Retrieves all returned book data from the database.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/returnedbook',
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
    {
        "id": 1,
        "book_id": 10,
        "copies": 16,
        "patron_id": 4,
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-04T14:36:00.000000Z",
        "book": {
            "id": 10,
            "name": "a",
            "author": "Candice Vandervort",
            "copies": 89,
            "category_id": 10,
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-04T14:36:00.000000Z",
            "category": {
                "id": 10,
                "category": "Biography",
                "created_at": "2021-01-04T14:36:00.000000Z",
                "updated_at": "2021-01-04T14:36:00.000000Z"
            }
        },
        "patron": {
            "id": 4,
            "last_name": "Hintz",
            "first_name": "Chauncey",
            "middle_name": "Yundt",
            "email": "jast.virgie@gmail.com",
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-04T14:36:00.000000Z"
        }
    },
    {
        "id": 2,
        "book_id": 13,
        "copies": 13,
        "patron_id": 7,
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-04T14:36:00.000000Z",
        "book": {
            "id": 13,
            "name": "pariatur",
            "author": "Jeffery Smith PhD",
            "copies": 68,
            "category_id": 13,
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-04T14:36:00.000000Z",
            "category": {
                "id": 13,
                "category": "Science",
                "created_at": "2021-01-04T14:36:00.000000Z",
                "updated_at": "2021-01-04T14:36:00.000000Z"
            }
        },
        "patron": {
            "id": 7,
            "last_name": "Turcotte",
            "first_name": "Davin",
            "middle_name": "Hoeger",
            "email": "rdurgan@yahoo.com",
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-04T14:36:00.000000Z"
        }
    }
]
```
<div id="execution-results-GETapi-returnedbook" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-returnedbook"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-returnedbook"></code></pre>
</div>
<div id="execution-error-GETapi-returnedbook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-returnedbook"></code></pre>
</div>
<form id="form-GETapi-returnedbook" data-method="GET" data-path="api/returnedbook" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-returnedbook', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-returnedbook" onclick="tryItOut('GETapi-returnedbook');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-returnedbook" onclick="cancelTryOut('GETapi-returnedbook');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-returnedbook" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/returnedbook</code></b>
</p>
</form>


## [POST] Stores Returned book.


Stores returned book data and updates the borrowed book and book copies as well.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/returnedbook',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'book_id' => 12,
            'copies' => 10,
            'patron_id' => 10,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "Book returned successfully!"
}
```
<div id="execution-results-POSTapi-returnedbook" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-returnedbook"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-returnedbook"></code></pre>
</div>
<div id="execution-error-POSTapi-returnedbook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-returnedbook"></code></pre>
</div>
<form id="form-POSTapi-returnedbook" data-method="POST" data-path="api/returnedbook" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-returnedbook', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-returnedbook" onclick="tryItOut('POSTapi-returnedbook');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-returnedbook" onclick="cancelTryOut('POSTapi-returnedbook');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-returnedbook" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/returnedbook</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>book_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book_id" data-endpoint="POSTapi-returnedbook" data-component="body" required  hidden>
<br>
Book id must exist in the borrowed book table.</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="POSTapi-returnedbook" data-component="body" required  hidden>
<br>
Must not exceed copies of book.</p>
<p>
<b><code>patron_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="patron_id" data-endpoint="POSTapi-returnedbook" data-component="body"  hidden>
<br>
Must exist in the borrowed books table.</p>

</form>


## [GET] Retrieves a returned book.


Retrieves a returned book data by id from the database.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/returnedbook/odio',
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
{
    "id": 8,
    "book_id": 12,
    "copies": 10,
    "patron_id": 10,
    "created_at": "2021-01-05T00:14:25.000000Z",
    "updated_at": "2021-01-05T00:14:25.000000Z",
    "book": {
        "id": 12,
        "name": "rerum",
        "author": "Garnet Parisian",
        "copies": 110,
        "category_id": 12,
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-05T00:14:25.000000Z",
        "category": {
            "id": 12,
            "category": "Science",
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-04T14:36:00.000000Z"
        }
    },
    "patron": {
        "id": 10,
        "last_name": "Auer",
        "first_name": "Jeanie",
        "middle_name": "Hansen",
        "email": "nwiza@block.com",
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-04T14:36:00.000000Z"
    }
}
```
> Example response (404):

```json
{
    "message": "Returned book not found"
}
```
<div id="execution-results-GETapi-returnedbook--returnedbook-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-returnedbook--returnedbook-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-returnedbook--returnedbook-"></code></pre>
</div>
<div id="execution-error-GETapi-returnedbook--returnedbook-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-returnedbook--returnedbook-"></code></pre>
</div>
<form id="form-GETapi-returnedbook--returnedbook-" data-method="GET" data-path="api/returnedbook/{returnedbook}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-returnedbook--returnedbook-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-returnedbook--returnedbook-" onclick="tryItOut('GETapi-returnedbook--returnedbook-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-returnedbook--returnedbook-" onclick="cancelTryOut('GETapi-returnedbook--returnedbook-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-returnedbook--returnedbook-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/returnedbook/{returnedbook}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>returnedbook</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="returnedbook" data-endpoint="GETapi-returnedbook--returnedbook-" data-component="url" required  hidden>
<br>
</p>
</form>



