<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $posModel;
    protected $telekomunikasiModel;
    protected $penyiaranModel;
    protected $infoModel;
    protected $faqModel;

    function __construct()
    {
        $this->posModel = model('PosModel', true, $db);
        $this->telekomunikasiModel = model('TelekomunikasiModel', true, $db);
        $this->penyiaranModel = model('PenyiaranModel', true, $db);
        $this->infoModel = model('InfoModel', true, $db);
        $this->faqModel = model('FaqModel', true, $db);
    }

    public function index()
    {

        $posCount = $this->posModel->findAll();
        $telekomunikasiCount = $this->telekomunikasiModel->findAll();
        $penyiaranCount = $this->penyiaranModel->findAll();


        $data = [
            'chart' => [count($posCount), count($telekomunikasiCount), count($penyiaranCount)]
        ];

        return view('beranda', $data);
    }

    public function informasi()
    {

        $dataRegulasi = $this->infoModel->where('feature', 'regulasi')->findAll();
        $data = [
            'dataRegulasi' => $dataRegulasi
        ];
        return view('informasi', $data);
    }

    public function datapos()
    {
        $posData = $this->posModel->findAll();

        $data = [
            'posDataArray' => $posData,
        ];

        return view('data-pos', $data);
    }

    public function datatelekomunikasi()
    {
        $telekomunikasiData = $this->telekomunikasiModel->findAll();

        $data = [
            'telekomunikasiDataArray' => $telekomunikasiData,
        ];

        return view('data-telekomunikasi', $data);
    }

    public function datapenyiaran()
    {
        $penyiaranData = $this->penyiaranModel->findAll();

        $data = [
            'penyiaranDataArray' => $penyiaranData,
        ];

        return view('data-penyiaran', $data);
    }



    public function kontak()
    {
        return view('kontak');
    }

    public function faq()
    {
        $faqData = $this->faqModel->findAll();

        $data = [
            'faqDataArray' => $faqData,
        ];

        return view('faq', $data);
    }
}
