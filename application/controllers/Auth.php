<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    /*
    |--------------------------------------------------------------------------
    | __construct()
    |--------------------------------------------------------------------------
    |
    | Function ini selalu dijalankan setiap kali memanggil Controller Auth.
    | Function ini automatis memanggil model -> Auth_Model.
    | 
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
    }

    /*
    |--------------------------------------------------------------------------
    | index()
    |--------------------------------------------------------------------------
    |
    | Function ini dijalankan jika user memanggil controller Auth tanpa mendefinisikan fungsinya di url.
    | Function ini digunakan untuk menampilkan view login.
    |
    */
	public function index()
	{
		$this->load->view('auth/login');
	}

    /*
    |--------------------------------------------------------------------------
    | prosesLogin()
    |--------------------------------------------------------------------------
    |
    | Function ini dijalankan untuk memproses input login dari user.
    | $username di post dari input username yang ada di view login.
    | $password di post dari input password yang ada di view login, kemudian password dienkripsi dengan md5.
    | $check_user memanggil function checkUser() yang ada di Auth_Model dengan parameter yang dimasukkan $username dan $password.
    | $check_user->num_rows() digunakan untuk menghitung jumlah record yang sesuai dengan hasil dari $check_user.
    | $check_user->result() digunakan untuk meng-extract data hasil dari $check_user.
    | Hasil dari $check_user->result() berupa username & level ditampung dalam session.
    | Kemudian lemparkan (redirect) user ke halaman home.
    | Jika $check_user->num_rows() == 0 yang artinya tidak ada username dan password yang sesuai dengan record yang ada di database.
    | Maka lemparkan user kembali ke form login atau dalam controller ini redirect ke Auth/index atau Auth saja.
    | Flashdata digunakan untuk menampilkan alert jika proses login gagal.
    |
    */
    public function prosesLogin()
    {
        $username   = $this->input->post('username', TRUE);
        $password   = md5($this->input->post('password', TRUE));
        $check_user = $this->Auth_Model->checkUser($username, $password);

        if($check_user->num_rows() > 0)
        {
            foreach($check_user->result() as $user)
            {
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('level', $user->level);
                $this->session->set_userdata('status', 'login');
                redirect(base_url());
            }
        }
        else
        {
            $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Username / password Anda salah, silahkan ulangi lagi!.</div>");
            redirect(base_url('Auth'));
        }
    }

    /*
    |--------------------------------------------------------------------------
    | logout()
    |--------------------------------------------------------------------------
    |
    | Function ini dijalankan untuk logout.
    | Bersihkan semua session.
    | Lemparkan user ke form login atau dalam controller ini redirect ke auth/index.
    |
    */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
