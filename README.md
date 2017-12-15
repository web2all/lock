# Web2All lock

This `web2all/lock` package requires the `web2all/framework` ([https://github.com/web2all/framework](https://github.com/web2all/framework)). It used to be proprietary software but now it has been released to the public domain under a MIT license.

This pacckage is no longer actively maintained. Most likely it is only of interest if you own software created by Web2All B.V. which was built using these classes.

## What does it do ##

Implement simple advisory locking. Currently only implements this using a mysql database which must be shared between the applications which want to use the advisory locking. Internally it uses the mysql functions `GET_LOCK` and `RELEASE_LOCK`. This makes it very easy to implement advisory locking between programs using the same database server. Prevent your processes from running in parallel.

## License ##

Web2All framework is open-sourced software licensed under the MIT license ([https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT "license")).
