# Transformer

### Example
Example of a transformer class:

```
class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
        ];
    }
}
```

### Usage

```
// controller

use FractalTrait;

public function __construct(Manager $manager)
{
    $this->fractal = $manager;
}

public function index(Request $request)
{
    // query database and get result
    
    // pass $request to $this->fractal() if you have query parameter
    $data = $this->fractal($request)->createData($result)->toArray();

    // if you don't have query parameter, you may direct use $this->fractal instead.
    //$data = $this->fractal->createData($result)->toArray();

    return $this->json($data);
}

```

### More information

https://github.com/samjarrett/FractalBundle#using-transformers-as-services

https://fractal.thephpleague.com/transformers/