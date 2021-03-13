<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('welcome_message');
		$this->load->model('email_model');
	}

	public function sendToEmail(){

        $this->load->model('email_model');


        $insert = $this->email_model->add(

            array(

                "name" => $this->input->post("name"),
                "email" => $this->input->post("email"),
                "phone" => $this->input->post("phone"),
                "address" => $this->input->post("address"),
                "service" => $this->input->post("service"),
                "order" => $this->input->post("order"),
                "fatura" => $this->input->post("fatura"),
                "product" => $this->input->post("product"),
                "message" => $this->input->post("message"),
                "attachment" => $this->input->post("attachment"),

            )
        );


        if ($insert) {

            $this->load->helper("string");

            $tempPass= random_string();

            $config = array(

                "protocol"   => "smtp",
                "smtp_host"  => "ssl://smtp.gmail.com",
                "smtp_port"  => "465",
                "smtp_user"  => "***********",
                "smtp_pass"  => "***********",
                "charset"    => "utf-8",
                "mailtype"   => "html",
                "wordwrap"   => true
            );

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';



            $this->load->library('email', $config);
            $this->load->library('upload', $config);
            $this->upload->do_upload('attachment');
            $upload_data = $this->upload->data();
            $this->email->attach($upload_data['full_path']);

            $subject = "*****************";

            $message = '
                    <h3 align="center">Destek Formu  '.$tempPass.'</h3>
                    <table border="1" width="100%" cellpadding="5">
                     <tr>
                      <td width="30%">Name</td>
                      <td width="70%">'.$this->input->post("name").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Email</td>
                      <td width="70%">'.$this->input->post("email").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Phone</td>
                      <td width="70%">'.$this->input->post("phone").'</td>
                     </tr>
                      <tr>
                      <td width="30%">Adres</td>
                      <td width="70%">'.$this->input->post("address").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Service</td>
                      <td width="70%">'.$this->input->post("service").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Order</td>
                      <td width="70%">'.$this->input->post("order").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Fatura</td>
                      <td width="70%">'.$this->input->post("fatura").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Product</td>
                      <td width="70%">'.$this->input->post("product").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Message</td>
                      <td width="70%">'.$this->input->post("message").'</td>
                     </tr>
                     <tr>
                      <td width="30%">Ticket Numaranız</td>
                      <td width="70%">'.$tempPass.'</td>
                     </tr>
                    </table>
            ';



            $this->email->set_newline("\r\n");
            $this->email->from($this->input->post("email"));
            $this->email->to('***********************');
            $this->email->subject($subject);
            $this->email->message($message);

            $send = $this->email->send();

            if ($send) {

                $this->session->set_flashdata('message', '<b> Talebiniz Alınmıştır Talep Numaranız.</b>  #' .$tempPass  );

                redirect('welcome');

            } else{

                echo "hyr";

                echo $this->email->print_debugger();

            }

        } else {


            echo "hatalı";
        }
	}
}
