# README

## This repo relates to [Issue 341 - spatie/laravel-event-sourcing](https://github.com/spatie/laravel-event-sourcing/issues/341)

### Instructions

- `git clone git@github.com:fabianpnke/laravel-event-sourcing-issue-341-demo.git`
- `touch database/database.sqlite`
- `php artisan migrate`

### Working Example

The working example can be invoked by hitting the `/works` endpoint. The `doSomething` Method is called and everything is fine.

### Failing Example

The failing example can be invoked by hitting the `/fails` endpoint. The `doSomething` Method is called and then a 500 Server Error is thrown.

### Difference between Working and Failing Example

Works:
```php
public function otherMethod(string $other): self
```

Fails:
```php
public function otherMethod($other): self
```
