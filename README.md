# Workshop GraphQL PHP

A query language for your API

- https://github.com/overblog/GraphQLBundle
- https://graphql.org/

## Install

```
git clone https://github.com/fpondepeyre/workshop-graphql-php.git
composer install
./bin/console doctrine:database:create
./bin/console doctrine:schema:update --force
cat data/apartments.sql | sqlite3 var/data.db
```

## Run 
```
./bin/console server:run
```

Go to ```http://127.0.0.1:8000/graphiql```

Query 1: 
```
{
  apartment(id:1) {
    id,
    street_address,
    country,
    city
  }
}
```

Query 2: 
```
{
  apartment_list(limit:10) {
    apartments {
      id,
      street_address,
      country,
      city
    }
  }
}
```