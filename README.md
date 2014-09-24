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
PSR-6 is (still) not accepted, hence this lib does not only contains a null-caching PSR-6 implementation,
it also contains a copy of the current (2014-09-24) PSR interface, and has this set as a composer "replace"
relation (so it shouldn't break stuff the moment PSR-6 finally comes out).

The Pool is instanciated by doing:
$pool = new Devedge\Cache\NoCachePool();

## License
MIT Style

## Notes
currently src/Psr contains the current Psr DRAFT for a caching standard, this is supposed to be replaced by using
the interface provided once php-fig has released the real standard

## Links
 * https://devedge.eu
