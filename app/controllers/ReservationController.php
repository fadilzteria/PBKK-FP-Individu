<?php
use Phalcon\Http\Request;

// use form
use App\Forms\CheckInForm;

class ReservationController extends ControllerBase
{
    public $reservationForm;
    public $reservationsModel;

    public function onConstruct()
    {
    }

    public function initialize()
    {
        $this->reservationForm = new CheckInForm();
        $this->reservationsModel = new Reservations();
    }

    public function checkinAction()
    {
        $this->view->form = new CheckInForm();
    }

    public function checkinSubmitAction()
    {
        $form = new CheckInForm(); 
        $this->reservationsModel = new Reservations();

        // check request
        if (!$this->request->isPost()) {
            return $this->response->redirect('reservation/checkin');
        }

        $form->bind($_POST, $this->reservationsModel);
        
        // check form validation
        if (!$form->isValid()) {
            foreach ($form->getMessages() as $message) {
                $this->flashSession->error($message);
                $this->dispatcher->forward([
                    'controller' => $this->router->getControllerName(),
                    'action'     => 'checkin',
                ]);
                return;
            }
        }

        $reservation = new Reservations();

        $tipe = $this->request->getPost('tipe_kamar');
        if ($tipe == 'Deluxe Room') {
            $reservation->jumlah_tarif = 4200000;
        }
        else if ($tipe == 'Premier Room') {
            $reservation->jumlah_tarif = 4500000;
        }
        else if ($tipe == 'Family Room') {
            $reservation->jumlah_tarif = 6300000;
        }
        
        $reservation->status_bayar = 0;
        $reservation->status_checkout = 0;

        $reservation->assign(array(
            'duration' => $this->request->getPost('jumlah_hari'),
            'nama_tamu' => $this->request->getPost('nama'),
            'email_tamu' => $this->request->getPost('email'),
            'alamat_tamu' => $this->request->getPost('alamat'),
            'kota_tamu' => $this->request->getPost('kota'),
            'telp_tamu' => $this->request->getPost('telp')
        ));

        $reservation->jumlah_tarif = $reservation->jumlah_tarif * $reservation->duration; 

        if (!$reservation->save()) {
            foreach ($this->reservation->getMessages() as $m) {
                $this->flashSession->error($m);
                $this->dispatcher->forward([
                    'controller' => $this->router->getControllerName(),
                    'action'     => 'checkin',
                ]);
                return;
            }
        }

        $this->flashSession->success('Reservasi Diterima');
        return $this->response->redirect('');

        $this->view->disable();
    }

    public function bayarAction()
    {

    }

    public function bayarSubmitAction()
    {
        if (!$this->request->isPost()) {
            return $this->response->redirect('reservation/bayar');
        }

        $id = $this->request->getPost('id_reservasi');

        $reservation = Reservations::find();
        foreach ($reservation as $reserv) {
            if ($reserv->id_reservasi == $id) {
                $this->flashSession->success($reserv->nama_tamu);
                $reserv->assign(array('status_bayar' => 1));
                $this->flashSession->success($reserv->status_bayar);
                break;
            }
        }
        
        // $this->flashSession->success($this->request->getPost('id_reservasi'));
        return $this->response->redirect('reservation/bayar');

        $this->view->disable();
    }

    public function komentarAction()
    {
        $reserv = Reservations::find();
        $this->view->reserv = $reserv;
    }

    public function komentarSubmitAction()
    {
        if (!$this->request->isPost()) {
            return $this->response->redirect('reservation/komentar');
        }

        $id = $this->request->getPost('id_reservasi');

        $reservation = Reservations::find();
        foreach ($reservation as $reserv) {
            if ($reserv->id_reservasi == $id) {
                $this->flashSession->success($reserv->nama_tamu);
                $reserv->assign(array('komentar' => $this->request->getPost('komentar')));
                $this->flashSession->success($reserv->komentar);
                break;
            }
        }
        
        return $this->response->redirect('reservation/komentar');

        $this->view->disable();
    }

    public function checkoutAction()
    {

    }

    public function checkoutSubmitAction()
    {
        if (!$this->request->isPost()) {
            return $this->response->redirect('reservation/checkout');
        }

        $id = $this->request->getPost('id_reservasi');

        $reservation = Reservations::find();
        foreach ($reservation as $reserv) {
            if ($reserv->id_reservasi == $id) {
                $this->flashSession->success($reserv->nama_tamu);
                $reserv->assign(array('status_checkout' => 1));
                $this->flashSession->success($reserv->status_checkout);
                break;
            }
        }
        
        return $this->response->redirect('reservation/checkout');

        $this->view->disable();
    }

    public function tamuAction()
    {
        $reserv = Reservations::find();
        $this->view->reservations = $reserv;
    }

}