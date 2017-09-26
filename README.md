# Query Builder

Query Builder for easing the SQL composing in NoSQL Databases

**To be concluded**

**Designed for Couchbase 5.0**

## Installing

### Installing via Composer

`composer require sant0ro/builder`

### Alternative install
- Learn [composer](https://getcomposer.org). You should not be looking for an alternative install. It is worth the time. Trust me ;-)
- Follow [this set of instructions](#installing-via-composer)

# Usage

## Operators

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/operators.html)

## Functions

### Comparing Data

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/comparisonfun.html)

### Mapping Data

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/jsonfun.html)

### Array Functions

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/arrayfun.html)

### Metadata Accessors

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/metafun.html)

### Miscellaneous

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/metafun.html)

## Indexing Data

### Creating Index

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/createindex.html)

### Creating Primary Key

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/createprimaryindex.html)

### Building Index

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/build-index.html)

### Deleting Index

**To be concluded**

[Reference](https://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/dropindex.html)

### Deleting Primary Key

**To be concluded**

[Reference](hhttps://developer.couchbase.com/documentation/server/5.0/n1ql/n1ql-language-reference/dropprimaryindex.html)

## Selecting Data

### SELECT Statement

### WHERE Statement

## Inserting Data

### Insert Statement

## Updating Data

### Update Statement

### Upsert Statement

## Managing Results

### Grouping Data

### Sorting Data

### Limit Data Results

# F.A.Q.

## Issues/Features proposals

[Here](https://github.com/sant0ro/builder/issues) is the issue tracker.

## Contributing

Only TDD code will be accepted. Please follow the [PSR-2 code standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

### How to run the tests:

```bash
phpunit --configuration tests/phpunit.xml
```

### To check the code standard run:

```bash
phpcs --standard=PSR2 lib
phpcs --standard=PSR2 tests

# alternatively

./bin/travis/run_phpcs.sh
```

## License
[MIT](MIT-LICENSE)

## Authors

- [Marcelo Jacobus](https://github.com/mjacobus)

## Contributors

- [Claudio Santoro](https://github.com/sant0ro)
- [Sergio Bittencourt](https://github.com/Sergio-Bittencourt)
