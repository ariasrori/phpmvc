<?php

class About extends Controller {

    public function index($nama = "ari", $pekerjaan = "pengusaha", $umur = 19){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = "About Index";
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['title'] = "About Page";
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }

}