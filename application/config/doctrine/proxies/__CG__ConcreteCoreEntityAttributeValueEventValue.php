<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Attribute\Value;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EventValue extends \Concrete\Core\Entity\Attribute\Value\EventValue implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'version', 'attribute_key', 'generic_value'];
        }

        return ['__isInitialized__', 'version', 'attribute_key', 'generic_value'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EventValue $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKey', []);

        return parent::getAttributeKey();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeValueID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeValueID', []);

        return parent::getAttributeValueID();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeKey($attribute_key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeKey', [$attribute_key]);

        return parent::setAttributeKey($attribute_key);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeTypeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeTypeObject', []);

        return parent::getAttributeTypeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getController', []);

        return parent::getController();
    }

    /**
     * {@inheritDoc}
     */
    public function __destruct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__destruct', []);

        return parent::__destruct();
    }

    /**
     * {@inheritDoc}
     */
    public function getValue($mode = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', [$mode]);

        return parent::getValue($mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplaySanitizedValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplaySanitizedValue', []);

        return parent::getDisplaySanitizedValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayValue', []);

        return parent::getDisplayValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainTextValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainTextValue', []);

        return parent::getPlainTextValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getSearchIndexValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSearchIndexValue', []);

        return parent::getSearchIndexValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenericValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenericValue', [$value]);

        return parent::setGenericValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenericValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenericValue', []);

        return parent::getGenericValue();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
