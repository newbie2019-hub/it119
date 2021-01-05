# Book Controller


## [GET] All Books


Retrieve all books from the database

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/books',
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
        "id": 3,
        "name": "praesentium",
        "author": "Dr. Patience Klocko PhD",
        "copies": 129,
        "category_id": 3,
        "created_at": "2021-01-04T14:35:59.000000Z",
        "updated_at": "2021-01-04T14:35:59.000000Z",
        "category": {
            "id": 3,
            "category": "Programming"
        }
    },
    {
        "id": 4,
        "name": "PHP Basics - Updated",
        "author": "Sabay",
        "copies": 15,
        "category_id": 4,
        "created_at": "2021-01-04T14:35:59.000000Z",
        "updated_at": "2021-01-04T14:35:59.000000Z",
        "category": {
            "id": 4,
            "category": "Programming - 2"
        }
    },
    {
        "id": 6,
        "name": "asperiores",
        "author": "Mathias Marks DDS",
        "copies": 29,
        "category_id": 6,
        "created_at": "2021-01-04T14:35:59.000000Z",
        "updated_at": "2021-01-04T14:35:59.000000Z",
        "category": {
            "id": 6,
            "category": "Programming - 2"
        }
    },
    {
        "id": 7,
        "name": "expedita",
        "author": "Vaughn Stamm",
        "copies": 181,
        "category_id": 7,
        "created_at": "2021-01-04T14:36:00.000000Z",
        "updated_at": "2021-01-04T14:36:00.000000Z",
        "category": {
            "id": 7,
            "category": "Fiction"
        }
    }
]
```
<div id="execution-results-GETapi-books" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-books"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-books"></code></pre>
</div>
<div id="execution-error-GETapi-books" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-books"></code></pre>
</div>
<form id="form-GETapi-books" data-method="GET" data-path="api/books" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-books', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-books" onclick="tryItOut('GETapi-books');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-books" onclick="cancelTryOut('GETapi-books');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-books" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/books</code></b>
</p>
</form>


## [POST] Stores book




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/books',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'name'=> 'Java Fundamentals 2',
            'author'=> 'Master Bucatcat',
            'copies'=> '15',
            'category_id'=> '15',
        ],
        'json' => [
            'name' => 'hic',
            'author' => 'assumenda',
            'copies' => 13,
            'category_id' => 'vel',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "name": "Java Fundamentals 2",
    "author": "Master Bucatcat",
    "copies": "15",
    "category_id": "15",
    "updated_at": "2021-01-03T06:00:07.000000Z",
    "created_at": "2021-01-03T06:00:07.000000Z",
    "id": 17
}
```
> Example response (422):

```json
[
    {
        "category_id": [
            "Category doesn't exist"
        ]
    }
]
```
<div id="execution-results-POSTapi-books" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-books"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-books"></code></pre>
</div>
<div id="execution-error-POSTapi-books" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-books"></code></pre>
</div>
<form id="form-POSTapi-books" data-method="POST" data-path="api/books" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-books', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-books" onclick="tryItOut('POSTapi-books');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-books" onclick="cancelTryOut('POSTapi-books');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-books" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/books</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-books" data-component="query" required  hidden>
<br>
Book name is required.</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="author" data-endpoint="POSTapi-books" data-component="query" required  hidden>
<br>
Author for the book is required.</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="POSTapi-books" data-component="query" required  hidden>
<br>
Copies for the book is required. Must be integer.</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-books" data-component="query" required  hidden>
<br>
Category id must exist in the categories table.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-books" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="author" data-endpoint="POSTapi-books" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="POSTapi-books" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category_id" data-endpoint="POSTapi-books" data-component="body" required  hidden>
<br>
</p>

</form>


## [GET] Retrieve book by id




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/books/3',
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
    "id": 3,
    "name": "praesentium",
    "author": "Dr. Patience Klocko PhD",
    "copies": 129,
    "category_id": 3,
    "created_at": "2021-01-04T14:35:59.000000Z",
    "updated_at": "2021-01-04T14:35:59.000000Z",
    "category": {
        "id": 3,
        "category": "Programming"
    }
}
```
> Example response (404):

```json
{
    "message": "Book not found"
}
```
<div id="execution-results-GETapi-books--book-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-books--book-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-books--book-"></code></pre>
</div>
<div id="execution-error-GETapi-books--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-books--book-"></code></pre>
</div>
<form id="form-GETapi-books--book-" data-method="GET" data-path="api/books/{book}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-books--book-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-books--book-" onclick="tryItOut('GETapi-books--book-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-books--book-" onclick="cancelTryOut('GETapi-books--book-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-books--book-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/books/{book}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="GETapi-books--book-" data-component="url" required  hidden>
<br>
Book is being retrieved by id. This {book} actually means id of the book.</p>
</form>


## [PUT] Update Book




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://127.0.0.1:8000/api/books/3',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'name'=> 'Java Fundamentals',
            'author'=> 'Prof. Ad',
            'copies'=> '155',
            'category_id'=> '11',
        ],
        'json' => [
            'name' => 'nesciunt',
            'author' => 'sint',
            'copies' => 20,
            'category_id' => 'dignissimos',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "Book updated successfully!",
    "book": {
        "id": 3,
        "name": "Java Fundamentals",
        "author": "Prof. Ad",
        "copies": "155",
        "category_id": "11",
        "created_at": "2021-01-04T14:35:59.000000Z",
        "updated_at": "2021-01-04T15:31:10.000000Z",
        "category": {
            "id": 3,
            "category": "Programming"
        }
    }
}
```
<div id="execution-results-PUTapi-books--book-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-books--book-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-books--book-"></code></pre>
</div>
<div id="execution-error-PUTapi-books--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-books--book-"></code></pre>
</div>
<form id="form-PUTapi-books--book-" data-method="PUT" data-path="api/books/{book}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-books--book-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-books--book-" onclick="tryItOut('PUTapi-books--book-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-books--book-" onclick="cancelTryOut('PUTapi-books--book-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-books--book-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/books/{book}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/books/{book}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="PUTapi-books--book-" data-component="url" required  hidden>
<br>
{book} refers to book id which is required for updating.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-books--book-" data-component="query" required  hidden>
<br>
Book name is required.</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="author" data-endpoint="PUTapi-books--book-" data-component="query" required  hidden>
<br>
Author for the book is required.</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="PUTapi-books--book-" data-component="query" required  hidden>
<br>
Copies for the book is required. Must be integer.</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-books--book-" data-component="query" required  hidden>
<br>
Category id must exist in the categories table.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-books--book-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="author" data-endpoint="PUTapi-books--book-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>copies</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="copies" data-endpoint="PUTapi-books--book-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category_id" data-endpoint="PUTapi-books--book-" data-component="body" required  hidden>
<br>
</p>

</form>


## [DELETE] Delete book by id.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://127.0.0.1:8000/api/books/14',
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
    "message": "Book deleted successfully!"
}
```
> Example response (404):

```json
{
    "message": "Book not found"
}
```
<div id="execution-results-DELETEapi-books--book-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-books--book-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-books--book-"></code></pre>
</div>
<div id="execution-error-DELETEapi-books--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-books--book-"></code></pre>
</div>
<form id="form-DELETEapi-books--book-" data-method="DELETE" data-path="api/books/{book}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-books--book-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-books--book-" onclick="tryItOut('DELETEapi-books--book-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-books--book-" onclick="cancelTryOut('DELETEapi-books--book-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-books--book-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/books/{book}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="DELETEapi-books--book-" data-component="url" required  hidden>
<br>
{book} refers to the id of the book.</p>
</form>



