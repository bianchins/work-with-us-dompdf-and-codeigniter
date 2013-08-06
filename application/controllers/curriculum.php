<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curriculum extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->form_validation->set_rules('cognome', 'Cognome', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('nazionalita', 'Nazionalit&agrave;', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('data_di_nascita', 'Data di nascita', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('indirizzo_residenza', 'Indirizzo di residenza', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('cap_residenza', 'Cap residenza', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('citta_residenza', 'Citt&agrave; di residenza', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('provincia_residenza', 'Provincia di residenza', 'required|xss_clean|strip_tags');
            $this->form_validation->set_rules('telefono', 'Telefono', 'required|xss_clean|strip_tags');
            //Campi non obbligatori
            $this->form_validation->set_rules('luogo_di_nascita', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('indirizzo_domicilio', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('cap_domicilio', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('citta_domicilio', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('provincia_domicilio', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('alloggio_zone_limitrofe', '', '');
            $this->form_validation->set_rules('email', '', 'valid_email|xss_clean|strip_tags');
            //Posizioni di interesse
            $this->form_validation->set_rules('addette_pulizie', '', '');
            $this->form_validation->set_rules('audiometristi', '', '');
            $this->form_validation->set_rules('crenoterapista', '', '');
            $this->form_validation->set_rules('esperti_sistemi_informatici', '', '');
            $this->form_validation->set_rules('estetiste', '', '');
            $this->form_validation->set_rules('fisioterapisti', '', '');
            $this->form_validation->set_rules('impiegati', '', '');
            $this->form_validation->set_rules('isef', '', '');
            $this->form_validation->set_rules('massoterapisti', '', '');
            $this->form_validation->set_rules('medici', '', '');
            $this->form_validation->set_rules('operai', '', '');
            $this->form_validation->set_rules('operai_specializzati', '', '');
            $this->form_validation->set_rules('posizione_altro', '', '');
            $this->form_validation->set_rules('posizione_altro_specifica', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('disponibile_corsi_formazione', '', '');
            //Istruzione e formazione
            $this->form_validation->set_rules('formazione_data_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_istituto_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_qualifica_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_data_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_istituto_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_qualifica_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_data_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_istituto_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_qualifica_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('formazione_altro', '', 'xss_clean|strip_tags');
            //Esperienze lavorative
            $this->form_validation->set_rules('lavoro_data_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_datore_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_settore_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_impiego_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_motivo_1', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_data_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_datore_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_settore_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_impiego_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_motivo_2', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_data_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_datore_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_settore_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_impiego_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lavoro_motivo_3', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('esperienza_altro', '', 'xss_clean|strip_tags');
            //Capacita e competenze
            $this->form_validation->set_rules('madrelingua', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('lingua_altro', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('eccellente_inglese', '', '');
            $this->form_validation->set_rules('eccellente_francese', '', '');
            $this->form_validation->set_rules('eccellente_tedesco', '', '');
            $this->form_validation->set_rules('eccellente_altro', '', '');
            $this->form_validation->set_rules('buono_inglese', '', '');
            $this->form_validation->set_rules('buono_francese', '', '');
            $this->form_validation->set_rules('buono_tedesco', '', '');
            $this->form_validation->set_rules('buono_altro', '', '');
            $this->form_validation->set_rules('elementare_inglese', '', '');
            $this->form_validation->set_rules('elementare_francese', '', '');
            $this->form_validation->set_rules('elementare_tedesco', '', '');
            $this->form_validation->set_rules('elementare_altro', '', '');
            $this->form_validation->set_rules('capacita_competenze', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('capacita_competenze_tecniche', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('capacita_competenze_altro', '', 'xss_clean|strip_tags');
            $this->form_validation->set_rules('patente', '', 'xss_clean|strip_tags');
            //Privacy
            $this->form_validation->set_rules('check_privacy', 'Accettare la Privacy', 'required');
            
            
            if ($this->form_validation->run()) {
                
                $this->load->helper(array('dompdf', 'file'));
                $data = $_POST;
                //Elaborazione immagine (se inviata)
                $config = array();
                $config['upload_path'] = 'photo-curriculum/';
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']	= '5120';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
                $config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
                if(is_uploaded_file($_FILES['foto']['tmp_name']))
                {
                    if ( ! $this->upload->do_upload('foto'))
                    {
                            $error = $this->upload->display_errors();
                            $data['error'] = $error;
                            $this->load->view('lavora-con-noi', $data);
                    }
                    else
                    {
                        $data_upload = $this->upload->data();

                        $this->load->library('image_lib');

                        $config = array();
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $data_upload['full_path'];
                        $config['maintain_ratio'] = TRUE;
                        //$config['create_thumb'] = TRUE;
                        $config['master_dim'] = 'width';
                        $config['width'] = 130;
                        $config['height'] = 50;

                        $data['foto'] = $data_upload['full_path'];

                        $this->load->library('image_lib');
                        $this->image_lib->initialize($config); 

                        if ( ! $this->image_lib->resize())
                        {
                            echo $this->image_lib->display_errors();
                        }
                     }
                }
                if(empty($error)) {
                    foreach($data as $key=>$value) {
                        $data[$key] = htmlentities($value, ENT_COMPAT, 'ISO-8859-1');
                    }
                    $html = $this->load->view('curriculum-pdf', $data, TRUE);
                    //pdf_create($html, 'filename');
                    
                    $pdf_curriculum_fullpath = './pdf-curriculum/'.uniqid().'.pdf';
                    $data_pdf = pdf_create($html, '', false);
                    write_file($pdf_curriculum_fullpath, $data_pdf);

                    $this->load->library('email');
                    $this->email->from('curriculum@acmespa.example.com', 'Curriculum Vitae Manager');
                    $this->email->to('info@acmespa.example.com');
                    $this->email->subject('Nuovo Curriculum Vitae su sito acme s.p.a. in data '.date("d/m/Y"));
                    $this->email->message('Ho ricevuto un nuovo curriculum vitae, in allegato.');
                    $this->email->attach($pdf_curriculum_fullpath);
                    if($this->email->send())
                        $this->load->view('feedback-invio', $data);
                    else
                        echo $this->email->print_debugger();
                }
            } 
            else 
            {
                $this->load->view('lavora-con-noi');
            }
	}

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'file'));
        $this->load->library('form_validation');
        $this->load->library('security');
    }
        
}

/* End of file curriculum.php */
/* Location: ./application/controllers/curriculum.php */