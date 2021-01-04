# Patron Controller


## [GET] Retrieves all patron.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/patrons',
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
]
```
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


## [POST] Stores a new patron




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/patrons',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'last_name'=> 'Sabay',
            'middle_name'=> 'Caindoy',
            'first_name'=> 'Yvan',
            'email'=> 'yvansabay61131@gmail.com',
        ],
        'json' => [
            'last_name' => 'voluptatem',
            'first_name' => 'sunt',
            'middle_name' => 'earum',
            'email' => 'kilback.bianka@example.org',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

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
}
```
> Example response (422):

```json
{
    "email": [
        "The email field is required."
    ]
}
```
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


## [GET] Retrieve patron by id.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/patrons/4',
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
    "id": 4,
    "last_name": "Dibbert",
    "first_name": "Trey",
    "middle_name": "Jerde",
    "email": "mae.grant@graham.com",
    "created_at": "2021-01-04T05:53:36.000000Z",
    "updated_at": "2021-01-04T05:53:36.000000Z"
}
```
> Example response (404):

```json
{
    "message": "Patron not found"
}
```
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


## [PUT] Update the patron




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://127.0.0.1:8000/api/patrons/2',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'last_name'=> 'Leannon',
            'middle_name'=> 'Wendell',
            'first_name'=> 'Lynch',
            'email'=> 'ttillman@hotmail.com',
        ],
        'json' => [
            'last_name' => 'quo',
            'first_name' => 'quasi',
            'middle_name' => 'velit',
            'email' => 'hessel.bradley@example.com',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
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
}
```
> Example response (404):

```json

{
 "message": "Patron not found
}
```
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


## [DELETE] Delete Patron




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://127.0.0.1:8000/api/patrons/sunt',
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
 "message": "Patron deleted successfully!
}
```
> Example response (404):

```json
{
    "message": "Patron not found"
}
```
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



