# Security

## JWT Authentication

We use LexikJWTAuthentication bundle.

### Configuration

You may change the LexikJWT configuration at `/config/packages/lexik_jwt_authentication.yaml`.

To enable LexikJWT in your authentication, uncomment `login` , `api` firewall and `access_control` from `/config/packages/security.yaml`.

```
        # login:
        #     pattern:  ^/api/login
        #     stateless: true
        #     anonymous: true
        #     user_checker: App\Security\UserChecker
        #     json_login:
        #         check_path:               /api/login_check
        #         success_handler:          lexik_jwt_authentication.handler.authentication_success
        #         failure_handler:          lexik_jwt_authentication.handler.authentication_failure

        # api:
        #     pattern:   ^/api
        #     stateless: true
        #     user_checker: App\Security\UserChecker
        #     guard:
        #         authenticators:
        #             - lexik_jwt_authentication.jwt_token_authenticator

        access_control:
        # - { path: ^/api/login, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        # - { path: ^/api,       roles: IS_AUTHENTICATED_FULLY }
```
#### Generate JWT public/private key

Execute `php bin/console lexik:generate-keys`

#### User Checker

If you want to do some checking before authenticated a user, use checker class:

```
class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        // do something
    }

    public function checkPostAuth(UserInterface $user)
    {
       // do something
    }
}
```

don't forget to add `user_checker: <your_checker_class>` label to your `security.yaml`


## Refresh Token

To enable refresh token, uncomment the `refresh` firewall and refresh route from `access_control`.

Modify the configuration from `/config/packages/gesdinet_jwt_refresh_token.yaml`.