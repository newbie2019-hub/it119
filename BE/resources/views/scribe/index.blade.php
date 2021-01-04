<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Library Management Api Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;php&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="php">php</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: January 4 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This is the api documentation of our laravel application for the Library Management</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://127.0.0.1:8000</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Book Controller</h1>
<h2>[GET] All Books</h2>
<p>Retrieve all books from the database</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/books',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
<h2>[POST] Stores book record to the database.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://127.0.0.1:8000/api/books',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'tenetur',
            'author'=&gt; 'impedit',
            'copies'=&gt; '4',
            'category_id'=&gt; '20',
        ],
        'json' =&gt; [
            'name' =&gt; 'modi',
            'author' =&gt; 'fugit',
            'copies' =&gt; 16,
            'category_id' =&gt; 'quis',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "name": "Java Fundamentals 2",
    "author": "Master Bucatcat",
    "copies": "15",
    "category_id": "15",
    "updated_at": "2021-01-03T06:00:07.000000Z",
    "created_at": "2021-01-03T06:00:07.000000Z",
    "id": 17
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "category_id": [
            "Category doesn't exist"
        ]
    }
]</code></pre>
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
<h2>[GET] Retrieve book by id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/books/voluptatibus',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'id'=&gt; 'distinctio',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Book not found"
}</code></pre>
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
<h2>[PUT] Update Book</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://127.0.0.1:8000/api/books/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'omnis',
            'author'=&gt; 'temporibus',
            'copies'=&gt; '10',
            'category_id'=&gt; '7',
        ],
        'json' =&gt; [
            'name' =&gt; 'et',
            'author' =&gt; 'occaecati',
            'copies' =&gt; 10,
            'category_id' =&gt; 'minus',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Book updated successfully!",
    "book": 1
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "field": [
            "Field Message"
        ]
    }
]</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Book not found
}</code></pre>
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
<h2>[DELETE] Delete book by id.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://127.0.0.1:8000/api/books/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Book deleted successfully!"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Book not found"
}</code></pre>
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
</form><h1>Borrowed Book Controller</h1>
<h2>[GET] Retrieve all borrowed book record</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/borrowedbook',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
]</code></pre>
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
<h2>[POST] Stores Borrowedbook.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://127.0.0.1:8000/api/borrowedbook',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'book_id' =&gt; 1,
            'copies' =&gt; 19,
            'patron_id' =&gt; 15,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "book_id": [
        "Book doesn't exist in the database"
    ],
    "patron_id": [
        "Patron doesn't exist in the database"
    ]
}</code></pre>
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

</form><h1>Categories Controller</h1>
<h2>[GET] Retrieves all categories.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 3,
        "category": "Programming",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 4,
        "category": "Programming - 2",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 5,
        "category": "Programming - 2",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 6,
        "category": "Programming - 2",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 7,
        "category": "Fiction",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 8,
        "category": "Horror",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 9,
        "category": "Novel",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 10,
        "category": "Biography",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 11,
        "category": "Science",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 12,
        "category": "Science",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 13,
        "category": "Science",
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z"
    },
    {
        "id": 14,
        "category": "Science",
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z"
    },
    {
        "id": 15,
        "category": "Biography",
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z"
    },
    {
        "id": 16,
        "category": "Biography",
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z"
    }
]</code></pre>
<div id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</div>
<div id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</div>
<form id="form-GETapi-categories" data-method="GET" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories</code></b>
</p>
</form><h1>Patron Controller</h1>
<h2>[GET] Retrieves all patron.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/patrons',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 3,
        "last_name": "Gaylord",
        "first_name": "Tristian",
        "middle_name": "Berge",
        "email": "aleen54@gmail.com",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 4,
        "last_name": "Dibbert",
        "first_name": "Trey",
        "middle_name": "Jerde",
        "email": "mae.grant@graham.com",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    },
    {
        "id": 5,
        "last_name": "Green",
        "first_name": "Pasquale",
        "middle_name": "Dicki",
        "email": "skiles.jayme@yahoo.com",
        "created_at": "2021-01-04T05:53:36.000000Z",
        "updated_at": "2021-01-04T05:53:36.000000Z"
    }
]</code></pre>
<div id="execution-results-GETapi-patrons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patrons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patrons"></code></pre>
</div>
<div id="execution-error-GETapi-patrons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patrons"></code></pre>
</div>
<form id="form-GETapi-patrons" data-method="GET" data-path="api/patrons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patrons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patrons</code></b>
</p>
</form>
<h2>[POST] Stores a new patron</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://127.0.0.1:8000/api/patrons',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'last_name'=&gt; 'Sabay',
            'middle_name'=&gt; 'Caindoy',
            'first_name'=&gt; 'Yvan',
            'email'=&gt; 'yvansabay61131@gmail.com',
        ],
        'json' =&gt; [
            'last_name' =&gt; 'voluptatem',
            'first_name' =&gt; 'sunt',
            'middle_name' =&gt; 'earum',
            'email' =&gt; 'kilback.bianka@example.org',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
{
"last_name": "Sabay",
"first_name": "Yvan",
"middle_name": "Caindoy",
"email": "yvansabay61131@gmail.com",
"updated_at": "2021-01-04T06:10:31.000000Z",
"created_at": "2021-01-04T06:10:31.000000Z",
"id": 16
}
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "email": [
        "The email field is required."
    ]
}</code></pre>
<div id="execution-results-POSTapi-patrons" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-patrons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patrons"></code></pre>
</div>
<div id="execution-error-POSTapi-patrons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patrons"></code></pre>
</div>
<form id="form-POSTapi-patrons" data-method="POST" data-path="api/patrons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-patrons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/patrons</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-patrons" data-component="query" required  hidden>
<br>
Last name of patron.</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-patrons" data-component="query" required  hidden>
<br>
Middle name of patron.</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-patrons" data-component="query" required  hidden>
<br>
First name of patron.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-patrons" data-component="query" required  hidden>
<br>
Email address of patron.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-patrons" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-patrons" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-patrons" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-patrons" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>

</form>
<h2>[GET] Retrieve patron by id.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/patrons/4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 4,
    "last_name": "Dibbert",
    "first_name": "Trey",
    "middle_name": "Jerde",
    "email": "mae.grant@graham.com",
    "created_at": "2021-01-04T05:53:36.000000Z",
    "updated_at": "2021-01-04T05:53:36.000000Z"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Patron not found"
}</code></pre>
<div id="execution-results-GETapi-patrons--patron-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patrons--patron-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patrons--patron-"></code></pre>
</div>
<div id="execution-error-GETapi-patrons--patron-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patrons--patron-"></code></pre>
</div>
<form id="form-GETapi-patrons--patron-" data-method="GET" data-path="api/patrons/{patron}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patrons--patron-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patrons/{patron}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patron</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="patron" data-endpoint="GETapi-patrons--patron-" data-component="url" required  hidden>
<br>
ID of the patron to be retrieved.</p>
</form>
<h2>[PUT] Update the patron</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://127.0.0.1:8000/api/patrons/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'last_name'=&gt; 'Leannon',
            'middle_name'=&gt; 'Wendell',
            'first_name'=&gt; 'Lynch',
            'email'=&gt; 'ttillman@hotmail.com',
        ],
        'json' =&gt; [
            'last_name' =&gt; 'quo',
            'first_name' =&gt; 'quasi',
            'middle_name' =&gt; 'velit',
            'email' =&gt; 'hessel.bradley@example.com',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Patron updated",
    "patron": {
        "id": 10,
        "last_name": "Leannon",
        "first_name": "Wendell",
        "middle_name": "Lynch",
        "email": "ttillman@hotmail.com",
        "created_at": "2021-01-04T05:53:37.000000Z",
        "updated_at": "2021-01-04T05:53:37.000000Z"
    }
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Patron not found
}</code></pre>
<div id="execution-results-PUTapi-patrons--patron-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-patrons--patron-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-patrons--patron-"></code></pre>
</div>
<div id="execution-error-PUTapi-patrons--patron-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-patrons--patron-"></code></pre>
</div>
<form id="form-PUTapi-patrons--patron-" data-method="PUT" data-path="api/patrons/{patron}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-patrons--patron-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/patrons/{patron}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/patrons/{patron}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patron</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="patron" data-endpoint="PUTapi-patrons--patron-" data-component="url" required  hidden>
<br>
ID of the patron to update</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-patrons--patron-" data-component="query" required  hidden>
<br>
Last name of patron.</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-patrons--patron-" data-component="query" required  hidden>
<br>
Middle name of patron.</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-patrons--patron-" data-component="query" required  hidden>
<br>
First name of patron.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-patrons--patron-" data-component="query" required  hidden>
<br>
Email address of patron.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-patrons--patron-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-patrons--patron-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-patrons--patron-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-patrons--patron-" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>

</form>
<h2>[DELETE] Delete Patron</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://127.0.0.1:8000/api/patrons/sunt',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Patron deleted successfully!
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Patron not found"
}</code></pre>
<div id="execution-results-DELETEapi-patrons--patron-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-patrons--patron-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-patrons--patron-"></code></pre>
</div>
<div id="execution-error-DELETEapi-patrons--patron-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-patrons--patron-"></code></pre>
</div>
<form id="form-DELETEapi-patrons--patron-" data-method="DELETE" data-path="api/patrons/{patron}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-patrons--patron-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/patrons/{patron}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patron</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patron" data-endpoint="DELETEapi-patrons--patron-" data-component="url" required  hidden>
<br>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="php">php</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["php"];
        setupLanguages(languages);
    });
</script>
</body>
</html>