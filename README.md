# guard-demo
This is a demo application to play with the new Symfony Guard component.

You can simply clone this repository, install composer dependencies:
```
/path/to/your/composer.phar install
```
And run built-in server:
```
app/console server:run
```

Git tags allow you to follow building two Guard authenticators.
You can checkout each tag and take a look around in the code.

To start, run:
```
git checkout 1-start
```

- 2-first-authenticator gives you all the code you need to implement the body of FormLoginAuthenticator
- 3-first-authenticator-done comes with working FormLoginAuthenticator
- 4-api-authenticator gives you all the code you need to implement the body of ApiTokenAuthenticator
- 5-api-authenticator-done comes with working ApiTokenAuthenticator

To test the API authenticator, run from the command line:
```
curl -H "X-TOKEN:1234567890ABCDEFG" localhost:8000/api/hello-world -i
```


