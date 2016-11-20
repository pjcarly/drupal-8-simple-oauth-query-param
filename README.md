# Simple OAuth Query Param
This is an addon for Simple OAuth (https://www.drupal.org/node/2632478)
It provides an implementation of using your token in an URI Query Parameter (http://tools.ietf.org/html/rfc6750#section-2.3)

Please be considerate of the security implications, only use this in cases where an Authorization Header cannot be used. Like with images, files, ...

## Usage
In your routing file, you must include another auth method 'token_bearer_param'

For example:
```yaml
my_module.image:
  path: /image/{slug}
  defaults:
    _controller: '\Drupal\my_module\Controller\ImageController::handle'
    _title: 'API Handler'
    slug: null
  options:
    _auth: [ 'token_bearer_param', 'cookie' ]
  requirements:
    _permission: 'access content'
  methods: ['GET']
```
