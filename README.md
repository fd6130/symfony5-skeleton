# symfony5-skeleton

This is [Symfony](https://www.symfony.com) 5 skeleton that included some common use packages and config that is able to use in a fresh project. 

This composer.json include lots of useful packages that suitable for most of the REST-API frontend + backend project.

- **Remember reset your APP_SECRET in `.env` using [Secret Generator](https://coderstoolbox.online/toolbox/generate-symfony-secret).**
- **If you clone the repository from git command, remember to delete the `.git` and reinitialize git using `git init` after clone.**

## Why skeleton?

This skeleton includes most of useful bundle/library for your new project. Instead of requiring a fresh symfony project and install the bundle/library one by one, this skeleton ease the common installation for you.
## Prerequisites

- Windows 10 or Linux or MacOS
- Vagrant and Virtualbox (if you need use homestead for dev)
- PHP >= 7.3
- Composer

## Packages that are included:

**Note: Some bundle/library you might don't really need it in your project.**

You may remove the unused bundle/library using `composer remove <package name>` or just simply go to `/config/bundles.php` and comment it out.

- [AutoMapperBundle](https://github.com/mark-gerarts/automapper-plus-bundle)
- [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle)
- [LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle)
- [JWTRefreshTokenBundle](https://github.com/markitosgv/JWTRefreshTokenBundle)
- [JsonRequestBundle](https://github.com/symfony-bundles/json-request-bundle)
- [NelmioCORSBundle](https://github.com/nelmio/NelmioCorsBundle)
- [InterventionImage](https://github.com/Intervention/image)
- [HslBundle](https://github.com/KnpLabs/KnpPaginatorBundle)
- [BeberleiDoctrineExtensions](https://github.com/beberlei/DoctrineExtensions)
- [NesbotCarbon](https://github.com/briannesbitt/Carbon)
- [NucleosDompdfBundle](https://github.com/nucleos/NucleosDompdfBundle)
- [OneupFlysystemBundle](https://github.com/1up-lab/OneupFlysystemBundle)
- [google-api-php-client](https://github.com/googleapis/google-api-php-client)
- [php-graph-sdk](https://github.com/facebookarchive/php-graph-sdk)
- [StofDoctrineExtensionsBundle](https://github.com/stof/StofDoctrineExtensionsBundle)
- [homestead](https://laravel.com/docs/8.x/homestead)
- [api-filter-bundle](https://github.com/monterhealth/api-filter-bundle)
- [easy-deploy-bundle](https://github.com/EasyCorp/easy-deploy-bundle)
- [firebase-bundle](https://github.com/kreait/firebase-bundle)
- [tzsk/otp](https://github.com/tzsk/otp)
- [php-enum](https://github.com/myclabs/php-enum)
- [tuck/sort](https://github.com/rosstuck/sort)
- [UrlSignerBundle](https://github.com/coopTilleuls/UrlSignerBundle)
