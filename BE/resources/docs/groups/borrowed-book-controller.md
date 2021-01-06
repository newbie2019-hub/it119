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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-borrowedbook" onclick="tryItOut('GETapi-borrowedbook');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-borrowedbook" onclick="cancelTryOut('GETapi-borrowedbook');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-borrowedbook" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/borrowedbook</code></b>
</p>
</form>


## [POST] Stores Borrowedbook.


Stores borrowed book data to the database and update the book copies as well.

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
        'query' => [
            'book_id'=> '12',
            'patron_id'=> '10',
            'copies'=> '10',
        ],
        'json' => \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
            $o = [
                clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['stdClass'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('stdClass')),
            ],
            null,
            [],
            [
                'book_id' => 'ea',
                'copies' => 'magnam',
                'patron_id' => $o[0],
            ],
            []
        ),
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "Book borrowed successfully",
    "borrowedbook": {
        "id": 8,
        "patron_id": 10,
        "copies": 10,
        "book_id": 12,
        "created_at": "2021-01-05T00:08:23.000000Z",
        "updated_at": "2021-01-05T00:08:23.000000Z",
        "book": {
            "id": 12,
            "name": "rerum",
            "author": "Garnet Parisian",
            "copies": 100,
            "category_id": 12,
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-05T00:08:23.000000Z"
        }
    }
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-borrowedbook" onclick="tryItOut('POSTapi-borrowedbook');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-borrowedbook" onclick="cancelTryOut('POSTapi-borrowedbook');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-borrowedbook" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/borrowedbook</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>book_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book_id" data-endpoint="POSTapi-borrowedbook" data-component="query" required  hidden>
<br>
Book id must exist in the book table.</p>
<p>
<b><code>patron_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="patron_id" data-endpoint="POSTapi-borrowedbook" data-component="query"  hidden>
<br>
Must exist in the patron table.</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="POSTapi-borrowedbook" data-component="query" required  hidden>
<br>
Must not exceed copies of book.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>book_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="book_id" data-endpoint="POSTapi-borrowedbook" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="copies" data-endpoint="POSTapi-borrowedbook" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>patron_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="patron_id" data-endpoint="POSTapi-borrowedbook" data-component="body"  hidden>
<br>
</p>

</form>


## [GET] Retrieve specific borrowed book by id.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/borrowedbook/aut',
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
    "id": 5,
    "patron_id": 6,
    "copies": 12,
    "book_id": 12,
    "created_at": "2021-01-04T14:36:00.000000Z",
    "updated_at": "2021-01-04T14:36:00.000000Z",
    "patron": {
        "id": 6,
        "last_name": "Christiansen",
        "first_name": "Delphia",
        "middle_name": "Kessler",
        "email": "dmcclure@hotmail.com",
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-04T14:36:00.000000Z"
    },
    "book": {
        "id": 12,
        "name": "rerum",
        "author": "Garnet Parisian",
        "copies": 110,
        "category_id": 12,
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-04T14:36:00.000000Z",
        "category": {
            "id": 12,
            "category": "Science",
            "created_at": "2021-01-04T14:36:00.000000Z",
            "updated_at": "2021-01-04T14:36:00.000000Z"
        }
    }
}
```
> Example response (404):

```json
{
    "message": "Borrowed book not found"
}
```
<div id="execution-results-GETapi-borrowedbook--borrowedbook-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-borrowedbook--borrowedbook-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-borrowedbook--borrowedbook-"></code></pre>
</div>
<div id="execution-error-GETapi-borrowedbook--borrowedbook-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-borrowedbook--borrowedbook-"></code></pre>
</div>
<form id="form-GETapi-borrowedbook--borrowedbook-" data-method="GET" data-path="api/borrowedbook/{borrowedbook}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-borrowedbook--borrowedbook-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-borrowedbook--borrowedbook-" onclick="tryItOut('GETapi-borrowedbook--borrowedbook-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-borrowedbook--borrowedbook-" onclick="cancelTryOut('GETapi-borrowedbook--borrowedbook-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-borrowedbook--borrowedbook-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/borrowedbook/{borrowedbook}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>borrowedbook</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="borrowedbook" data-endpoint="GETapi-borrowedbook--borrowedbook-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-borrowedbook--borrowedbook-" data-component="url" required  hidden>
<br>
integer Refers to the book id.</p>
</form>



