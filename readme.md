## Test Laravel support for Postgres Bool types

issue+solution:  
https://github.com/laravel/framework/pull/26259


### Run test

```bash
git clone https://github.com/coraxster/laravel-pg-bool-test.git
cd laravel-pg-bool-test
docker-compose run composer
docker-compose run test
```

### the test
is here  
https://github.com/coraxster/laravel-pg-bool-test/blob/master/tests/Unit/PgDbTest.php
