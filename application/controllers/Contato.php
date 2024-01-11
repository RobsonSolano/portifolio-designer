<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contato extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index($form_erros = "")
	{
		$data['title'] = "Designer Mayara Ferreira  - Contato";
		$data['modulo'] = 'contato';

		if(!empty($form_erros)){
			$data['error'] = $form_erros;
		}

		$this->load->view('partials/view_header', $data);
		$this->load->view('partials/view_navigation');
		$this->load->view('pages/view_contato');
		$this->load->view('partials/view_footer');
	}

	public function enviar()
	{

		$this->form_validation->set_rules(
			'nome',
			'Nome',
			'trim|required',
			array('required' => 'O campo %s é obrigatório')
		);
		$this->form_validation->set_rules(
			'email',
			'E-mail',
			'trim|required',
			array('required' => 'O campo %s é obrigatório')
		);
		$this->form_validation->set_rules(
			'celular',
			'Celular/Whatsapp',
			'trim|required',
			array('required' => 'O campo %s é obrigatório')
		);
		$this->form_validation->set_rules(
			'mensagem',
			'Mensagem',
			'trim|required|min_length[8]',
			array('required' => 'O campo %s é obrigatório','min_length[8]' => 'O campo %s precisa ter pelo menos 8 caracteres')
		);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('flash_message', ['mensagem' => '<strong>Não foi possível enviar o contato.</strong><br>Verifique os campos e tente novamente', 'tipo' => 'warning']);
			$form_errors = $this->form_validation->error_array();
			$this->index($form_errors);
		} else {

			if (!$this->send()) {
				$this->session->set_flashdata('flash_message', ['mensagem' => '<strong>Não foi possível enviar o contato.</strong><br>Verifique os campos e tente novamente', 'tipo' => 'warning']);
			} else {
				$this->session->set_flashdata('flash_message', ['mensagem' => '<strong>Contato enviado com sucesso</strong><br>Em breve retornarei seu contato', 'tipo' => 'success']);
			}

			redirect(base_url('contato'));
		}
	}

	function send($email = "mah.rferreiira@hotmail.com", $nome = "Mayara Ferreira", $subject = "Novo contato pelo seu site")
	{
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host       = $this->email->smtp_host;
		$mail->SMTPAuth   = true;
		$mail->Username   = $this->email->smtp_user;
		$mail->Password   = $this->email->smtp_pass;
		$mail->SMTPSecure = 'tls';
		$mail->Port       = $this->email->smtp_port;
		$mail->charSet    = $this->email->charset;

		$mail->setFrom($this->email->smtp_user, 'MF Designer');

		// Define o destinatário
		$mail->addAddress($email, $nome);

		// Email subject
		$mail->Subject = $subject;

		// Set email format to HTML
		$mail->isHTML(true);

		$data = $this->input->post();

		// Email body content
		$mailContent = $this->load->view('partials/email/view_contato', $data, true);


		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			return false;
		}

		return true;
	}
}
