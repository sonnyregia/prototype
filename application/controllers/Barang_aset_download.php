<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_aset_download extends CI_Controller
{
   
   function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Merk_aset_model');
        $this->load->model('Satuan_aset_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'konten' => 'barang_aset_download/barang_aset_download_list',
            'judul' => ' Barang Aset Master',
        );
        $this->load->view('v_index', $data);
    }

    public function detail($kode_detail){
        $data = array(
            'konten' => 'barang_aset_download/barang_aset_download_detail',
            'judul' => ' Barang Aset Master',
            'data' => $this->db->query("SELECT * FROM barang_aset where id_aset='$kode_detail'"),
        );
        $this->load->view('v_index', $data);
    }
    
    public function cetak($kode_cetak)
    {
        $data = array(
            'data' => $this->db->query("SELECT * FROM barang_aset where id_aset='$kode_cetak'"),
        );
        $this->load->view('cetak_aset_bmn',$data);
    }

    public function update($id) 
    {
        $row = $this->Barang_aset_sub_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_aset_download/update_action'),
        'id_aset_sub' => set_value('id_aset_sub', $row->id_aset_sub),
        // 'kode_aset' => set_value('kode_aset', $row->kode_aset),
        'nama_aset' => set_value('nama_aset', $row->nama_aset),
        'seri' => set_value('seri', $row->seri),
        'tahun' => set_value('tahun', $row->tahun),
        'merk_aset' => set_value('merk_aset', $row->merk_aset),
        'penguasaan' => set_value('penguasaan', $row->penguasaan),
        'keterangan' => set_value('keterangan', $row->keterangan),
        'satuan_aset' => set_value('satuan_aset', $row->satuan_aset),
        'konten' => 'barang_aset_download/barang_aset_download_form_update',
            'judul' => 'Data Aset',
        );
            $data['all_satuan'] = $this->Satuan_aset_model->get_all_satuan();
            $data['all_merk'] = $this->Merk_aset_model->get_all_merk();
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset_download'));
        }
    }
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_aset_sub', TRUE));
        } else {
        if ($_FILES == '') {
            
            $data = array(
        // 'kode_aset' => $this->input->post('kode_aset',TRUE),
        'nama_aset' => $this->input->post('nama_aset',TRUE),
        'tahun' => $this->input->post('tahun',TRUE),
        'seri' => $this->input->post('seri',TRUE),
        'merk_aset' => $this->input->post('merk_aset',TRUE),
        'satuan_aset' => $this->input->post('satuan_aset',TRUE),
        'penguasaan' => $this->input->post('penguasaan',TRUE),
        'keterangan' => $this->input->post('keterangan',TRUE),

        );

            $this->Barang_aset_sub_model->update($this->input->post('id_aset_sub', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_aset_download'));

        } else {

            // $nmfile = "barang_".time();
            // $config['upload_path'] = './image/barang';
            // $config['allowed_types'] = 'jpg|png';
            // $config['max_size'] = '20000';
            // $config['file_name'] = $nmfile;
            // // load library upload
            // $this->load->library('upload', $config);
            // // upload gambar 1
            // $this->upload->do_upload('foto_barang');
            // $result1 = $this->upload->data();
            // $result = array('gambar'=>$result1);
            // $dfile = $result['gambar']['file_name'];

             $data = array(
        // 'kode_aset' => $this->input->post('kode_aset',TRUE),
        'nama_aset' => $this->input->post('nama_aset',TRUE),
        'tahun' => $this->input->post('tahun',TRUE),
        'seri' => $this->input->post('seri',TRUE),
        'merk_aset' => $this->input->post('merk_aset',TRUE),
        'satuan_aset' => $this->input->post('satuan_aset',TRUE),
        'penguasaan' => $this->input->post('penguasaan',TRUE),
        'keterangan' => $this->input->post('keterangan',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_aset_sub_model->update($this->input->post('id_aset_sub', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_aset_download'));
        }

           
        }
    }
    public function _rules() 
    {
    $this->form_validation->set_rules('seri', 'kode', 'trim|required');
    $this->form_validation->set_rules('nama_aset', 'nama aset', 'trim|required');
    $this->form_validation->set_rules('tanggal_input', 'tanggal_input aset', 'trim');
    $this->form_validation->set_rules('tahun', 'tahun aset', 'trim|required');
    $this->form_validation->set_rules('merk_aset', 'merk aset', 'trim|required');
    $this->form_validation->set_rules('satuan_aset', 'satuan aset', 'trim|required');
    $this->form_validation->set_rules('penguasaan', 'penguasaan', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

    $this->form_validation->set_rules('id_aset_sub', 'id_aset_sub', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

