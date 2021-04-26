# PhpEnvironment
This environment create a current structure

- php 7.1.27
- xdebug 
- mysql 5.6.44
- Apache 2.4.25


## How to open TCP Docker Port on Mac OS

```
socat TCP-LISTEN:2375,reuseaddr,fork UNIX-CONNECT:/var/run/docker.sock &
```

How to build
---

Run `build.sh` contains in `Apache` and `Database` Path

After run compose to:
`docker-compose -f compose-yaml up -d`

Default Database credentials
--

User: `root`

Password: `example`

How to login PHPMyAdmin
--

Open: `http://localhost:8080`

#### credential:

Server: `mydb` 

User: `root`

Pass: `example` 


