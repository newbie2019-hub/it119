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
        "name": "explicabo",
        "author": "Lawrence Goldner",
        "copies": 108,
        "category_id": 3,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
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
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 4,
            "category": "Programming - 2"
        }
    },
    {
        "id": 6,
        "name": "aliquid",
        "author": "Ethelyn Armstrong",
        "copies": 160,
        "category_id": 6,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 6,
            "category": "Programming - 2"
        }
    },
    {
        "id": 7,
        "name": "fugit",
        "author": "Mr. Ezra Keebler",
        "copies": 160,
        "category_id": 7,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 7,
            "category": "Fiction"
        }
    },
    {
        "id": 8,
        "name": "voluptatem",
        "author": "Dr. Elian McLaughlin",
        "copies": 106,
        "category_id": 8,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 8,
            "category": "Horror"
        }
    },
    {
        "id": 9,
        "name": "ut",
        "author": "Prof. Russel Cartwright II",
        "copies": 168,
        "category_id": 9,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 9,
            "category": "Novel"
        }
    },
    {
        "id": 10,
        "name": "et",
        "author": "Dante Hettinger",
        "copies": 167,
        "category_id": 10,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 10,
            "category": "Biography"
        }
    },
    {
        "id": 11,
        "name": "officia",
        "author": "Hiram Hettinger",
        "copies": 126,
        "category_id": 11,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 11,
            "category": "Science"
        }
    },
    {
        "id": 12,
        "name": "asperiores",
        "author": "Rodrigo Skiles",
        "copies": 56,
        "category_id": 12,
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z",
        "category": {
            "id": 12,
            "category": "Science"
        }
    },
    {
        "id": 13,
        "name": "nesciunt",
        "author": "Ms. Virgie Yost I",
        "copies": 28,
        "category_id": 13,
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z",
        "category": {
            "id": 13,
            "category": "Science"
        }
    },
    {
        "id": 14,
        "name": "perferendis",
        "author": "Stephanie Howe",
        "copies": 193,
        "category_id": 14,
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z",
        "category": {
            "id": 14,
            "category": "Science"
        }
    },
    {
        "id": 15,
        "name": "aut",
        "author": "Jaida Hackett",
        "copies": 27,
        "category_id": 15,
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z",
        "category": {
            "id": 15,
            "category": "Biography"
        }
    },
    {
        "id": 16,
        "name": "accusantium",
        "author": "Ansley Tillman",
        "copies": 159,
        "category_id": 16,
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z",
        "category": {
            "id": 16,
            "category": "Biography"
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
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/books</code></b>
</p>
</form>


## [POST] Stores book record to the database.




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
            'name'=> 'tenetur',
            'author'=> 'impedit',
            'copies'=> '4',
            'category_id'=> '20',
        ],
        'json' => [
            'name' => 'modi',
            'author' => 'fugit',
            'copies' => 16,
            'category_id' => 'quis',
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
    'http://127.0.0.1:8000/api/books/voluptatibus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'id'=> 'distinctio',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "id": 15,
    "name": "aperiam",
    "author": "Malachi Fritsch",
    "copies": 152,
    "category_id": 15,
    "created_at": "2021-01-03T05:47:54.000000Z",
    "updated_at": "2021-01-03T05:47:54.000000Z",
    "category": {
        "id": 15,
        "category": "Sci-fi"
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
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/books/{book}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>book</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="book" data-endpoint="GETapi-books--book-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-books--book-" data-component="query" required  hidden>
<br>
integer Book is retrieved by id.</p>
</form>


## [PUT] Update Book




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://127.0.0.1:8000/api/books/14',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'name'=> 'omnis',
            'author'=> 'temporibus',
            'copies'=> '10',
            'category_id'=> '7',
        ],
        'json' => [
            'name' => 'et',
            'author' => 'occaecati',
            'copies' => 10,
            'category_id' => 'minus',
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
    "book": 1
}
```
> Example response (422):

```json
[
    {
        "field": [
            "Field Message"
        ]
    }
]
```
> Example response (404):

```json

{
 "message": "Book not found
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
Book id is required for updating.</p>
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
    'http://127.0.0.1:8000/api/books/2',
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



