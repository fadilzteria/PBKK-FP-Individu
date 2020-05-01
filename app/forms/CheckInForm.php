<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Submit;

// Validation
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class CheckInForm extends Form
{
    public function initialize()
    {
        $tipe_kamar = new Text('tipe_kamar', [
            "class" => "form-control",
            "placeholder" => "Masukkan Tipe Kamar"
        ]);

        // form name field validation
        $tipe_kamar->addValidator(
            new PresenceOf(['message' => 'Tipe kamar diperlukan'])
        );

        $jumlah_hari = new Text('jumlah_hari', [
            "class" => "form-control",
            "placeholder" => "Masukkan Jumlah Hari"
        ]);

        // form name field validation
        $jumlah_hari->addValidator(
            new PresenceOf(['message' => 'Jumlah hari diperlukan'])
        );

        $nama = new Text('nama', [
            "class" => "form-control",
            "placeholder" => "Masukkan Nama Tamu"
        ]);

        // form name field validation
        $nama->addValidator(
            new PresenceOf(['message' => 'Nama Tamu diperlukan'])
        );
        
        /**
         * Email Address
         */
        $email = new Text('email', [
            "class" => "form-control",
            "placeholder" => "Masukkan Alamat Email Tamu"
        ]);

        // form email field validation
        $email->addValidators([
            new PresenceOf(['message' => 'Alamat Email Tamu diperlukan']),
            new Email(['message' => 'Alamat Email Tamu tidak valid']),
        ]);

        $alamat = new Text('alamat', [
            "class" => "form-control",
            "placeholder" => "Masukkan Alamat Tamu"
        ]);

        // form name field validation
        $alamat->addValidator(
            new PresenceOf(['message' => 'Alamat Tamu diperlukan'])
        );

        $kota = new Text('kota', [
            "class" => "form-control",
            "placeholder" => "Masukkan Kota Tamu"
        ]);

        // form name field validation
        $kota->addValidator(
            new PresenceOf(['message' => 'Kota Tamu diperlukan'])
        );

        $telp = new Text('telp', [
            "class" => "form-control",
            "placeholder" => "Masukkan Nomor Telepon Tamu"
        ]);

        // form name field validation
        $telp->addValidator(
            new PresenceOf(['message' => 'Nomor Telepon Tamu diperlukan'])
        );

        /**
         * Submit Button
         */
        $submit = new Submit('submit', [
            "value" => "Pesan Reservasi",
            "class" => "btn btn-primary",
        ]);

        $this->add($tipe_kamar);
        $this->add($jumlah_hari);
        $this->add($nama);
        $this->add($email);
        $this->add($alamat);
        $this->add($kota);
        $this->add($telp);
        $this->add($submit);
    }
}