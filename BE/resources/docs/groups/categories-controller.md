# Categories Controller


## [GET] Retrieves all categories.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/categories',
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
]
```
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
</form>



