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

#CategoryManagement


<!-- START_db20564ba266cd451caac114b3eac8ab -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category" 
```

```javascript
const url = new URL("http://localhost/api/category");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/category`


<!-- END_db20564ba266cd451caac114b3eac8ab -->

<!-- START_ec11475782f550e9415364d0e8774ea0 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category/create" 
```

```javascript
const url = new URL("http://localhost/api/category/create");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/category/create`


<!-- END_ec11475782f550e9415364d0e8774ea0 -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/category" 
```

```javascript
const url = new URL("http://localhost/api/category");

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
`POST api/category`


<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_977e23840a7e9249b1f7136f1eadabe2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category/1" 
```

```javascript
const url = new URL("http://localhost/api/category/1");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/category/{category}`


<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->

<!-- START_f29d34640ef1a69ac4a6e1495464a3bc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/category/1/edit");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/category/{category}/edit`


<!-- END_f29d34640ef1a69ac4a6e1495464a3bc -->

<!-- START_ed2985a22796532e66be664ff9783124 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/category/1" 
```

```javascript
const url = new URL("http://localhost/api/category/1");

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
`PUT api/category/{category}`

`PATCH api/category/{category}`


<!-- END_ed2985a22796532e66be664ff9783124 -->

<!-- START_c663adad7473b698445af374c584ba20 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/category/1" 
```

```javascript
const url = new URL("http://localhost/api/category/1");

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
`DELETE api/category/{category}`


<!-- END_c663adad7473b698445af374c584ba20 -->

#CountryManagement


<!-- START_c7fae8a06934c43d9aac54f559ea8bee -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/country" 
```

```javascript
const url = new URL("http://localhost/api/country");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/country`


<!-- END_c7fae8a06934c43d9aac54f559ea8bee -->

<!-- START_d0e34d00c9557d4e89290bccb0e19e94 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/country/create" 
```

```javascript
const url = new URL("http://localhost/api/country/create");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/country/create`


<!-- END_d0e34d00c9557d4e89290bccb0e19e94 -->

<!-- START_ad737d96b4511e210e932bbb8c8a5b05 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/country" 
```

```javascript
const url = new URL("http://localhost/api/country");

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
`POST api/country`


<!-- END_ad737d96b4511e210e932bbb8c8a5b05 -->

<!-- START_6a0364dcb3d4ce41d2269b044487641c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/country/1" 
```

```javascript
const url = new URL("http://localhost/api/country/1");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/country/{country}`


<!-- END_6a0364dcb3d4ce41d2269b044487641c -->

<!-- START_0a39a0bec0254a67608b128c02d591fd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/country/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/country/1/edit");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/country/{country}/edit`


<!-- END_0a39a0bec0254a67608b128c02d591fd -->

<!-- START_460af50c7eabd663a275b437318f78c9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/country/1" 
```

```javascript
const url = new URL("http://localhost/api/country/1");

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
`PUT api/country/{country}`

`PATCH api/country/{country}`


<!-- END_460af50c7eabd663a275b437318f78c9 -->

<!-- START_957c718b964b96a83b1d966592818a9a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/country/1" 
```

```javascript
const url = new URL("http://localhost/api/country/1");

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
`DELETE api/country/{country}`


<!-- END_957c718b964b96a83b1d966592818a9a -->

#DirectorManagement


<!-- START_7b0eb423afb3f8514dbc9953cb3e504b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/director" 
```

```javascript
const url = new URL("http://localhost/api/director");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/director`


<!-- END_7b0eb423afb3f8514dbc9953cb3e504b -->

<!-- START_efb527740cc2cd072ae06e185ee3356e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/director/create" 
```

```javascript
const url = new URL("http://localhost/api/director/create");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/director/create`


<!-- END_efb527740cc2cd072ae06e185ee3356e -->

<!-- START_f0cd0b27cd903bf96961135e2ae56f98 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/director" 
```

```javascript
const url = new URL("http://localhost/api/director");

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
`POST api/director`


<!-- END_f0cd0b27cd903bf96961135e2ae56f98 -->

<!-- START_31631e50758438314425393e4206a144 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/director/1" 
```

```javascript
const url = new URL("http://localhost/api/director/1");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/director/{director}`


<!-- END_31631e50758438314425393e4206a144 -->

<!-- START_6fd0f23d3954cc3c658c7e27b590767f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/director/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/director/1/edit");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/director/{director}/edit`


<!-- END_6fd0f23d3954cc3c658c7e27b590767f -->

<!-- START_e4b0f2e5acebff1a339c83124c3e97e8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/director/1" 
```

```javascript
const url = new URL("http://localhost/api/director/1");

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
`PUT api/director/{director}`

`PATCH api/director/{director}`


<!-- END_e4b0f2e5acebff1a339c83124c3e97e8 -->

<!-- START_6695ce00fc5671841e2009453a96222a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/director/1" 
```

```javascript
const url = new URL("http://localhost/api/director/1");

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
`DELETE api/director/{director}`


<!-- END_6695ce00fc5671841e2009453a96222a -->

#MovieManagement


<!-- START_4c52f24a898e0dae16a0a53f79728f08 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/movies" 
```

```javascript
const url = new URL("http://localhost/api/movies");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/movies`


<!-- END_4c52f24a898e0dae16a0a53f79728f08 -->

<!-- START_b3e54e37d420606f4b9cf5509514c967 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/movies/create" 
```

```javascript
const url = new URL("http://localhost/api/movies/create");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/movies/create`


<!-- END_b3e54e37d420606f4b9cf5509514c967 -->

<!-- START_d9ef03b9df8b3fb5245d8b7a313232ff -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/movies" 
```

```javascript
const url = new URL("http://localhost/api/movies");

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
`POST api/movies`


<!-- END_d9ef03b9df8b3fb5245d8b7a313232ff -->

<!-- START_76a0c7e7642f4171d9bf317e12e0e21d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/movies/1" 
```

```javascript
const url = new URL("http://localhost/api/movies/1");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/movies/{movie}`


<!-- END_76a0c7e7642f4171d9bf317e12e0e21d -->

<!-- START_1a9e01fdd52488c3408ba01c5cdf8e94 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/movies/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/movies/1/edit");

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/movies/{movie}/edit`


<!-- END_1a9e01fdd52488c3408ba01c5cdf8e94 -->

<!-- START_803c20902ae0b56e8b65d3dc3275df12 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/movies/1" 
```

```javascript
const url = new URL("http://localhost/api/movies/1");

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
`PUT api/movies/{movie}`

`PATCH api/movies/{movie}`


<!-- END_803c20902ae0b56e8b65d3dc3275df12 -->

<!-- START_bd572be367779aac73c7aa3be67b9e80 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/movies/1" 
```

```javascript
const url = new URL("http://localhost/api/movies/1");

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
`DELETE api/movies/{movie}`


<!-- END_bd572be367779aac73c7aa3be67b9e80 -->

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


