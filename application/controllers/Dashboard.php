public function __construct()
{
    parent::__construct();

    if (!$this->session->userdata('logged_in')) {
        redirect('auth/login');
    }
}
