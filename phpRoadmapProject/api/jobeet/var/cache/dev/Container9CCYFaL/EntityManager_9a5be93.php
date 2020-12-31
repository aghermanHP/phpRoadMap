<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getConnection()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getConnection', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getMetadataFactory', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getExpressionBuilder', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'beginTransaction', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getCache', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'transactional', array('func' => $func), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->transactional($func);
    }

    public function commit()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'commit', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->commit();
    }

    public function rollback()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'rollback', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getClassMetadata', array('className' => $className), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'createQuery', array('dql' => $dql), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'createNamedQuery', array('name' => $name), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'createQueryBuilder', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'flush', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'clear', array('entityName' => $entityName), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->clear($entityName);
    }

    public function close()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'close', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->close();
    }

    public function persist($entity)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'persist', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'remove', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'refresh', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'detach', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'merge', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'contains', array('entity' => $entity), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getEventManager', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getConfiguration', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'isOpen', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getUnitOfWork', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getProxyFactory', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'initializeObject', array('obj' => $obj), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'getFilters', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'isFiltersStateClean', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd66b9 && ($this->initializerd66b9->__invoke($valueHolder7decc, $this, 'hasFilters', array(), $this->initializerd66b9) || 1) && $this->valueHolder7decc = $valueHolder7decc;

        return $this->valueHolder7decc->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd66b9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7decc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7decc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7decc->__construct($conn, $config, $eventManager);
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
