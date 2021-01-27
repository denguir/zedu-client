# Zedu-client
Dockerized applications designed by ymairesse: [ZeusEdu](https://github.com/ymairesse/ZeusEdu) and [thot](https://github.com/ymairesse/thot2)

## How to use

* Complete vars.env with your settings
* Give the application the right permissions
```
chmod -R 777 src/
```
* Lauch containers
```
docker-compose up -d
```
* Visit your browser at ZEUS_DOMAIN_NAME and THOT_DOMAIN_NAME (see vars.env)

* If nothing pops up, try visiting ZEUS_DOMAIN_NAME/install first



