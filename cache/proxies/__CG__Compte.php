<?php

namespace Samane\Proxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Compte extends \Compte implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
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
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
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
            return ['__isInitialized__', '' . "\0" . 'Compte' . "\0" . 'id', '' . "\0" . 'Compte' . "\0" . 'numero', '' . "\0" . 'Compte' . "\0" . 'solde', '' . "\0" . 'Compte' . "\0" . 'etat', '' . "\0" . 'Compte' . "\0" . 'agence', '' . "\0" . 'Compte' . "\0" . 'created_at', '' . "\0" . 'Compte' . "\0" . 'client', '' . "\0" . 'Compte' . "\0" . 'operations', '' . "\0" . 'Compte' . "\0" . 'type_compte', '' . "\0" . 'Compte' . "\0" . 'montant_initial', '' . "\0" . 'Compte' . "\0" . 'date_gele', '' . "\0" . 'Compte' . "\0" . 'montant_agios', '' . "\0" . 'Compte' . "\0" . 'frais_ouverture', '' . "\0" . 'Compte' . "\0" . 'depot_initial', '' . "\0" . 'Compte' . "\0" . 'montant_blocage'];
        }

        return ['__isInitialized__', '' . "\0" . 'Compte' . "\0" . 'id', '' . "\0" . 'Compte' . "\0" . 'numero', '' . "\0" . 'Compte' . "\0" . 'solde', '' . "\0" . 'Compte' . "\0" . 'etat', '' . "\0" . 'Compte' . "\0" . 'agence', '' . "\0" . 'Compte' . "\0" . 'created_at', '' . "\0" . 'Compte' . "\0" . 'client', '' . "\0" . 'Compte' . "\0" . 'operations', '' . "\0" . 'Compte' . "\0" . 'type_compte', '' . "\0" . 'Compte' . "\0" . 'montant_initial', '' . "\0" . 'Compte' . "\0" . 'date_gele', '' . "\0" . 'Compte' . "\0" . 'montant_agios', '' . "\0" . 'Compte' . "\0" . 'frais_ouverture', '' . "\0" . 'Compte' . "\0" . 'depot_initial', '' . "\0" . 'Compte' . "\0" . 'montant_blocage'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Compte $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero($numero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$numero]);

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolde()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolde', []);

        return parent::getSolde();
    }

    /**
     * {@inheritDoc}
     */
    public function setSolde($solde)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolde', [$solde]);

        return parent::setSolde($solde);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getType_compte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType_compte', []);

        return parent::getType_compte();
    }

    /**
     * {@inheritDoc}
     */
    public function setType_compte($type_compte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType_compte', [$type_compte]);

        return parent::setType_compte($type_compte);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant_initial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant_initial', []);

        return parent::getMontant_initial();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant_initial($montant_initial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant_initial', [$montant_initial]);

        return parent::setMontant_initial($montant_initial);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant_agios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant_agios', []);

        return parent::getMontant_agios();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant_agios($montant_agios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant_agios', [$montant_agios]);

        return parent::setMontant_agios($montant_agios);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant_blocage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant_blocage', []);

        return parent::getMontant_blocage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant_blocage($montant_blocage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant_blocage', [$montant_blocage]);

        return parent::setMontant_blocage($montant_blocage);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepot_initial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepot_initial', []);

        return parent::getDepot_initial();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepot_initial($depot_initial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepot_initial', [$depot_initial]);

        return parent::setDepot_initial($depot_initial);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrais_ouverture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrais_ouverture', []);

        return parent::getFrais_ouverture();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrais_ouverture($frais_ouverture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrais_ouverture', [$frais_ouverture]);

        return parent::setFrais_ouverture($frais_ouverture);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate_gele()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate_gele', []);

        return parent::getDate_gele();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate_gele($date_gele)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate_gele', [$date_gele]);

        return parent::setDate_gele($date_gele);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', []);

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient($client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', [$client]);

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated_at()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated_at', []);

        return parent::getCreated_at();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated_at($created_at)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated_at', [$created_at]);

        return parent::setCreated_at($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompte_courants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompte_courants', []);

        return parent::getCompte_courants();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompte_courants($compte_courants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompte_courants', [$compte_courants]);

        return parent::setCompte_courants($compte_courants);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompte_epargnes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompte_epargnes', []);

        return parent::getCompte_epargnes();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompte_epargnes($compte_epargnes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompte_epargnes', [$compte_epargnes]);

        return parent::setCompte_epargnes($compte_epargnes);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompte_bloques()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompte_bloques', []);

        return parent::getCompte_bloques();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompte_bloques($compte_bloques)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompte_bloques', [$compte_bloques]);

        return parent::setCompte_bloques($compte_bloques);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgence', []);

        return parent::getAgence();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgence($agence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgence', [$agence]);

        return parent::setAgence($agence);
    }

    /**
     * {@inheritDoc}
     */
    public function getOperations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOperations', []);

        return parent::getOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function setOperations($operations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOperations', [$operations]);

        return parent::setOperations($operations);
    }

    /**
     * {@inheritDoc}
     */
    public function depot($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'depot', [$montant]);

        return parent::depot($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function retrait($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'retrait', [$montant]);

        return parent::retrait($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function virement(\Compte $cpt, $montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'virement', [$cpt, $montant]);

        return parent::virement($cpt, $montant);
    }

}
