# symfony5-skeleton

---

This is Symfony 5 skeleton that included some common use packages and config that is able to use in a fresh project. 

This composer.json include lots of useful packages that suitable for most of the REST-API frontend + backend project.

**Remember reset your APP_SECRET in `.env` using [Secret Generator](https://coderstoolbox.online/toolbox/generate-symfony-secret).**

## Documentation

- [DTO automapper configuration](./docs/dto-automapper.md)
- [Security configuration](./docs/security.md)
- [Transformer configuration](./docs/transformer.md)

## Packages that are included:

To disable a bundle/package, you may remove it using composer command or if you wish to reuse it later then just simply go to `/config/bundles.php` and comment it out.

- [AutoMapperBundle](https://github.com/mark-gerarts/automapper-plus-bundle)
- [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle)
- [LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle)
- [JWTRefreshTokenBundle](https://github.com/markitosgv/JWTRefreshTokenBundle)
- [FractalBundle](https://github.com/samjarrett/FractalBundle)
- [PagerFantaBundle](https://github.com/BabDev/BabDevPagerfantaBundle)
- [JsonRequestBundle](https://github.com/symfony-bundles/json-request-bundle)
- [NelmioCORSBundle](https://github.com/nelmio/NelmioCorsBundle)
- [InterventionImage](https://github.com/Intervention/image)
- [BentoolsWebpushBundle](https://github.com/bpolaszek/webpush-bundle)
- [KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle)
- [BeberleiDoctrineExtensions](https://github.com/beberlei/DoctrineExtensions)
- [NesbotCarbon](https://github.com/briannesbitt/Carbon)
