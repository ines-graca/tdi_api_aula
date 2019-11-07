---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_0bfd90e643e49117746d270f35d4851b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post" 
```

```javascript
const url = new URL("http://localhost/api/post");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 3,
            "title": "3",
            "description": "4",
            "image": "2",
            "user_id": 6,
            "created_at": "2019-10-11 16:06:44",
            "updated_at": "2019-10-11 16:06:44",
            "deleted_at": null,
            "user": {
                "id": 6,
                "name": "Prof. Reilly Lynch",
                "email": "adolf83@example.com",
                "email_verified_at": "2019-10-04 17:13:55",
                "role_id": 3,
                "created_at": "2019-10-04 17:13:55",
                "updated_at": "2019-10-04 17:13:55",
                "deleted_at": null
            }
        },
        {
            "id": 4,
            "title": "3",
            "description": "4",
            "image": "2",
            "user_id": 6,
            "created_at": "2019-10-11 16:12:19",
            "updated_at": "2019-10-11 16:12:19",
            "deleted_at": null,
            "user": {
                "id": 6,
                "name": "Prof. Reilly Lynch",
                "email": "adolf83@example.com",
                "email_verified_at": "2019-10-04 17:13:55",
                "role_id": 3,
                "created_at": "2019-10-04 17:13:55",
                "updated_at": "2019-10-04 17:13:55",
                "deleted_at": null
            }
        },
        {
            "id": 5,
            "title": "something somethingsdsds",
            "description": "descricao",
            "image": "images\/V9ukHnNxHjmSw2c2UePCW9ABDQtyxaT4ee1WTnCH.jpeg",
            "user_id": 1,
            "created_at": "2019-10-18 16:40:08",
            "updated_at": "2019-10-18 16:40:08",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-10-04 17:13:55",
                "updated_at": "2019-10-04 17:13:55",
                "deleted_at": null
            }
        },
        {
            "id": 6,
            "title": "somethin",
            "description": "descricao",
            "image": "images\/KMIatB5NeU3hohD912TyPiedBOFtNgq6UDI8PkvU.jpeg",
            "user_id": 1,
            "created_at": "2019-10-18 16:41:22",
            "updated_at": "2019-10-18 16:41:22",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-10-04 17:13:55",
                "updated_at": "2019-10-04 17:13:55",
                "deleted_at": null
            }
        },
        {
            "id": 7,
            "title": "somethinggg",
            "description": "descricao",
            "image": "images\/bgFOTS1BIaGW7ce3ixhArOd11ukyXEInDcpeKxyF.jpeg",
            "user_id": 1,
            "created_at": "2019-10-18 16:41:47",
            "updated_at": "2019-10-18 16:41:47",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-10-04 17:13:55",
                "updated_at": "2019-10-04 17:13:55",
                "deleted_at": null
            }
        },
        {
            "id": 8,
            "title": "titulonovo1",
            "description": "akbksablablabllablab",
            "image": "images\/7ZgkAWtLwYIRjeZtOcJhO40Azzl52hWcDx8TNodQ.png",
            "user_id": 1,
            "created_at": "2019-10-18 17:57:34",
            "updated_at": "2019-10-18 17:57:34",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-10-04 17:13:55",
                "updated_at": "2019-10-04 17:13:55",
                "deleted_at": null
            }
        }
    ],
    "message": "Listagem de Posts",
    "result": "OK"
}
```

### HTTP Request
`GET api/post`


<!-- END_0bfd90e643e49117746d270f35d4851b -->

<!-- START_069d819760d0c6037bb02a5ff72b2b82 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post/create" 
```

```javascript
const url = new URL("http://localhost/api/post/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/post/create`


<!-- END_069d819760d0c6037bb02a5ff72b2b82 -->

<!-- START_112f38c169c6b664068ce459c85b7d63 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/post" 
```

```javascript
const url = new URL("http://localhost/api/post");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/post`


<!-- END_112f38c169c6b664068ce459c85b7d63 -->

<!-- START_d463cf779ec485e9a6a3c8d9cab975e0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post/1" 
```

```javascript
const url = new URL("http://localhost/api/post/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`GET api/post/{post}`


<!-- END_d463cf779ec485e9a6a3c8d9cab975e0 -->

<!-- START_681935fd87b1cb556b6828f34c8e5c89 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/post/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`GET api/post/{post}/edit`


<!-- END_681935fd87b1cb556b6828f34c8e5c89 -->

<!-- START_489ced4bef0ee4943abe65e9c6005a89 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/post/1" 
```

```javascript
const url = new URL("http://localhost/api/post/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/post/{post}`

`PATCH api/post/{post}`


<!-- END_489ced4bef0ee4943abe65e9c6005a89 -->

<!-- START_56e843a0c10055309a0ed18ee61a9050 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/post/1" 
```

```javascript
const url = new URL("http://localhost/api/post/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/post/{post}`


<!-- END_56e843a0c10055309a0ed18ee61a9050 -->


