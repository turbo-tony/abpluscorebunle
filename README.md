Installation
============

Foreword
--------

This bundle lies in a [private repository][1]. As such, composer is [unable to resolve dependencies][2] unless [Satis or Toran Proxy][3] is installed. Because of this, you will have to add all dependencies manually.

Step 1: Update repositories
---------------------------

Add the following lines to your `composer.json`, in the `repositories` section, from the root of your project:

```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:turbo-tony/abpluscorebunle.git"
        }
    ],
```

If the system on which you try to install the project does not support SSH, you can use the alternative HTTP URL instead:

```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:turbo-tony/abpluscorebunle.git"
        }
    ],
```

Step 2: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require abplus/core-bundle "dev-master"
```

Step 4: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following lines in the `app/AppKernel.php`
file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            // Dependency bundles
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            // Your new bundle
            new Certinergy\CoreBundle\ABPlusCoreBundle(),
        );

        // ...
    }

    // ...
}
```

[1]: https://getcomposer.org/doc/05-repositories.md#using-private-repositories
[2]: https://getcomposer.org/doc/faqs/why-can%27t-composer-load-repositories-recursively.md
[3]: https://getcomposer.org/doc/articles/handling-private-packages-with-satis.md
