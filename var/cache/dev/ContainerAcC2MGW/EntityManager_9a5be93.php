<?php

namespace ContainerAcC2MGW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3311a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer88a67 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties24c27 = [
        
    ];

    public function getConnection()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getConnection', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getMetadataFactory', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getExpressionBuilder', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'beginTransaction', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getCache', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'transactional', array('func' => $func), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'commit', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->commit();
    }

    public function rollback()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'rollback', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getClassMetadata', array('className' => $className), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'createQuery', array('dql' => $dql), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'createNamedQuery', array('name' => $name), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'createQueryBuilder', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'flush', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'clear', array('entityName' => $entityName), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->clear($entityName);
    }

    public function close()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'close', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->close();
    }

    public function persist($entity)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'persist', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'remove', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'refresh', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'detach', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'merge', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'contains', array('entity' => $entity), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getEventManager', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getConfiguration', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'isOpen', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getUnitOfWork', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getProxyFactory', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'initializeObject', array('obj' => $obj), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'getFilters', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'isFiltersStateClean', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'hasFilters', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return $this->valueHolder3311a->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer88a67 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3311a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3311a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3311a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, '__get', ['name' => $name], $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        if (isset(self::$publicProperties24c27[$name])) {
            return $this->valueHolder3311a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3311a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3311a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3311a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3311a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, '__isset', array('name' => $name), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3311a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3311a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, '__unset', array('name' => $name), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3311a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3311a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, '__clone', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        $this->valueHolder3311a = clone $this->valueHolder3311a;
    }

    public function __sleep()
    {
        $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, '__sleep', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;

        return array('valueHolder3311a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer88a67 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer88a67;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer88a67 && ($this->initializer88a67->__invoke($valueHolder3311a, $this, 'initializeProxy', array(), $this->initializer88a67) || 1) && $this->valueHolder3311a = $valueHolder3311a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3311a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3311a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
