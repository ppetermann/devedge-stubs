# devedge/stubs
A library that provides null implementations for various PSRs
remember that those don't do anything. I'd recommend to use them only if you are really sure you don't want something
implementing the specific interface, or as a dev-dependency.

## PSR-3 - psr/log
While psr/log for example includes a Null implementation (NullLogger), the psr/log
package itself will not satisfy a psr/log-implementation requirement, hence this package provides
Devedge\Log\NoLog. If you require this package the dependency will be full filled.

You can use
$logger = new Devedge\Log\NoLog; to create a psr compliant Null Logger.

## PSR-6 - psr/cache
The Pool is instanciated by doing:
$pool = new Devedge\Cache\NoCachePool();

## License
MIT Style, see LICENSE.txt

## Links
 * https://devedge.eu
