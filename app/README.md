# BASIC API Rest APP
This App based with lumen framework ( Laravel based )

#### Requirment 
- Composer with [php 7.1.27](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.1.27/)


#### Setup
- Running  `composer update` in `app` folder;
- Create Docker Image
    - Read `docker/README.md`


### Usage 

- Get JWT token:
```
curl --location --request POST 'http://localhost/app/api/auth/login' \
--header 'Content-Type: application/json' \
--data-raw '{
    "email":"salvatore.turboli@gmail.com",
    "password":"example"
}'
```

- get All Photos:

```
curl --location --request GET 'http://localhost/app/api/photo' \
--header 'Authorization: Bearer <Generated Token>
```

- get Photo Detail:

```
curl --location --request GET 'http://localhost/app/api/photo/<id>' \
--header 'Authorization: Bearer <Generated Token>
```
