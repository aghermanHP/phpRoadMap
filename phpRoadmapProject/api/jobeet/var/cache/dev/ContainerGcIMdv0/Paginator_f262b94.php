<?php

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7decc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd66b9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesefeae = [
        
    ];

    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->setDefaultPaginatorOptions($options);
    }

    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->paginate($target, $page, $limit, $options);
    }

    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->subscribe($subscriber);
    }

    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->connect($eventName, $listener, $priority);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->eventDispatcher, $instance->defaultOptions);

        $instance->initializerd66b9 = $initializer;

        return $instance;
    }

    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;

        if (! $this->valueHolder7decc) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder7decc = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);

        }

        $this->valueHolder7decc->__construct($eventDispatcher);
    }

    public function & __get($name)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, '__get', ['name' => $name], $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        if (isset(self::$publicPropertiesefeae[$name])) {
            return $this->valueHolder7decc->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7decc;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder7decc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7decc;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7decc;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, '__isset', array('name' => $name), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7decc;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7decc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, '__unset', array('name' => $name), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7decc;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7decc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, '__clone', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        $this->valueHolder7decc = clone $this->valueHolder7decc;
    }

    public function __sleep()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, '__sleep', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return array('valueHolder7decc');
    }

    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd66b9 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerd66b9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'initializeProxy', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7decc;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder7decc;
    }


}
