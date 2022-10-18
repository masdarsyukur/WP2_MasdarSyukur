<?php
class Datasiswa extends CI_Controller
{
    public function index()
    {

        $this->load->view('view-form-datasiswa');
    }


    public function cetak()

    {


        // $this->form_validation->set_rules(
        //     'email',
        //     'Alamat Email',
        //     'required|trim|valid_email',
        //     [
        //         'required' => 'Email Harus diisi!!',
        //         'valid_email' => 'Email Tidak Benar!!'
        //     ]
        // );

        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|trim',
            ['required' => 'Nama Siswa harus diisi']
        );
        $this->form_validation->set_rules('nis', 'NIS', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('tgllahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');




        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-datasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgllahir' => $this->input->post('tgllahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')

            ];

            $this->load->view('view-datasiswa', $data);
        }
    }
}
