# DTO automapper

## Configuring a dto

### Why dto

We have more control to our user input data such as validating the data before putting into our entity.

### Create a dto

To make a dto recognize by our project, we need to implement `DtoRequestInterface`

```
class UserInput implements DtoRequestInterface
{
    public $username;
    public $password;

    public function __construct(Request $request)
    {
        $this->username = $request->get('username');
        $this->password = $request->get('password');
    }
}

```

### Create a mapper

A mapper class is a custom class that allow you to write your custom way to handle the data from dto to entity.

Example of registering a mapper class:

```
class UserMapperConfig extends CustomMapper implements AutoMapperConfiguratorInterface
{
    private $entityManager;

    /**
     * For use in across methods
     */
    private $source;

    /**
     * For use in across methods
     */
    private $destination;

    /**
    * You can inject services to constructor
    */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function configure(AutoMapperConfigInterface $config): void
    {
        $config->registerMapping(UserInput::class, User::class)
            ->useCustomMapper($this);
    }

    public function mapToObject($source, $destination)
    {
        // do this if you have another method that need to
        // use $source and $destination.
        
        $this->source = $source;
        $this->destination = $destination;

        // the rest of your code...

        return $destination;
    }
}

```

## Usage

Inject the dto as a service in a controller:

```
// controller
public function create(UserInput $userInput, AutoMapperInterface $mapper)
{
    /**
    * $userInput now contain user input data,
    * so we can map it to an entity class.
    */ 
    $user = $mapper->map($userInput, User::class);

    // the rest of the code...
}

```

## How it work

`App/DtoRequestResolver` class will resolve user input data and pass it to our dto, at that time we can validate the dto before passing to a controller.