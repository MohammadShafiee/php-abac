<?php

namespace PhpAbac\Model;

abstract class AbstractAttribute {
    /** @var integer **/
    protected $id;
    /** @var string **/
    protected $name;
    /** @var \DateTime **/
    protected $createdAt;
    /** @var \DateTime **/
    protected $updatedAt;
    /** @var mixed **/
    protected $value;
    
    /**
     * @param integer $id
     * @return \PhpAbac\Model\AbstractAttribute
     */
    public function setId($id) {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @param string $name
     * @return \PhpAbac\Model\AbstractAttribute
     */
    public function setName($name) {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * @param \DateTime $datetime
     * @return \PhpAbac\Model\Attribute
     */
    public function setCreatedAt(\DateTime $datetime) {
        $this->createdAt = $datetime;
        
        return $this;
    }
    
    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }
    
    /**
     * @param \DateTime $datetime
     * @return \PhpAbac\Model\Attribute
     */
    public function setUpdatedAt(\DateTime $datetime) {
        $this->updatedAt = $datetime;
        
        return $this;
    }
    
    /**
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
    
    /**
     * @param mixed $value
     * @return \PhpAbac\Model\Attribute
     */
    public function setValue($value) {
        $this->value = $value;
        
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getValue() {
        return $this->value;
    }
}