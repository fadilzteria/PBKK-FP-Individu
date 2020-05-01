<?php

class Reservations extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_reservasi;

    /**
     *
     * @var integer
     */
    public $duration;

    /**
     *
     * @var double
     */
    public $jumlah_tarif;

    /**
     *
     * @var integer
     */
    public $status_bayar;

    /**
     *
     * @var integer
     */
    public $status_checkout;

    /**
     *
     * @var string
     */
    public $komentar;

    /**
     *
     * @var string
     */
    public $nama_tamu;

    /**
     *
     * @var string
     */
    public $email_tamu;

    /**
     *
     * @var string
     */
    public $alamat_tamu;

    /**
     *
     * @var string
     */
    public $kota_tamu;

    /**
     *
     * @var string
     */
    public $telp_tamu;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("pbkk_individu");
        $this->setSource("reservations");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Reservations[]|Reservations|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Reservations|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
