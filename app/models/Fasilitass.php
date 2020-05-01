<?php

class Fasilitass extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_fasilitas;

    /**
     *
     * @var string
     */
    public $nama_fasilitas;

    /**
     *
     * @var double
     */
    public $tarif_fasilitas;

    /**
     *
     * @var string
     */
    public $deskripsi;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("pbkk_individu");
        $this->setSource("fasilitass");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Fasilitass[]|Fasilitass|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Fasilitass|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
