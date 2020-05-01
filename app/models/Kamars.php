<?php

class Kamars extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_kamar;

    /**
     *
     * @var string
     */
    public $jenis_kamar;

    /**
     *
     * @var double
     */
    public $tarif_kamar;

    /**
     *
     * @var integer
     */
    public $kapasitas;

    /**
     *
     * @var integer
     */
    public $ukuran;

    /**
     *
     * @var string
     */
    public $deskripsi;

    /**
     *
     * @var string
     */
    public $fitur;

    /**
     *
     * @var string
     */
    public $gambar;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("pbkk_individu");
        $this->setSource("kamars");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kamars[]|Kamars|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kamars|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
