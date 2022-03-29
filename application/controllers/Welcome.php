<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title']='Welcome to Edique';
		viewload('index',$data);
	}
	
	public function contact_insert(){
		$name=$_POST['name'];
		$company=$_POST['company'];
		$mail=$_POST['email'];
		
		$mobno= $_POST['mobno'];
		$interest=$_POST['interest'];
		$message=$_POST['message'];
		
		$this->load->library('email');
		$config['protocol']    	= 'smtp';
		$config['smtp_host']    = 'smtp.gmail.com';
		$config['smtp_crypto']    = 'ssl';
		$config['smtp_port']    = '465';
		$config['smtp_user']    = 'info@edique.in';
		$config['smtp_pass']    = 'Edique@2016';
		$config['charset']    	= 'utf-8';
		$config['newline']    	= "\r\n";
		$config['mailtype'] 	= 'html';
		$this->email->initialize($config);

		$this->email->from($mail,$name);
		$this->email->to('info@edique.in'); 
		$this->email->subject("Enquiry Details");
		
		$body = "<html xmlns='http://www.w3.org/1999/xhtml'>
					<head>
						<title>EdiQue</title>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
						<meta name='viewport' content='width=device-width, initial-scale=1.0' />
						
					</head>
					<body style='margin:0; padding:0;' bgcolor='#eaeced'>
						<table style='min-width:320px;' width='100%' cellspacing='0' cellpadding='0' bgcolor='#eaeced'>
							<tr>
								<td style='padding:30px 10px;'>
									<!-- module 2 -->
									<table class='flexible' width='600' align='center' style='margin:0 auto;' cellpadding='0' cellspacing='0'>
										<tr>
											<td style='padding:58px 60px 52px;' bgcolor='#f9f9f9'>
												<table width='100%' cellpadding='0' cellspacing='0'>
													<tr>
														<td align='left' style='font:bold 16px/25px Arial, Helvetica, sans-serif; color:#888; padding:0 0 23px;'>
															Sender Name : ".$name."
															<br/>
															Company : ".$company."
															<br/>
															Email : ".$mail."
															<br/>
															Contact No. : ".$mobno."
															<br/>
															Contact for : ".$interest."
															<br/>
															Details: ".$message."
															<!-- Please click on below link to verify your email: -->
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr><td height='28'></td></tr>
									</table>
									<table class='flexible' width='600' align='center' style='margin:0 auto;' cellpadding='0' cellspacing='0'>
										<tr>
											<td style='font:12px/16px Arial, Helvetica, sans-serif; color:#797c82; padding:0 0 10px;'>
												© Copyright 2017 EdiQue Solutions Private Limited. All Rights Reserved. 
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<!-- fix for gmail -->
							<tr>
								<td style='line-height:0;'><div style='display:none; white-space:nowrap; font:15px/1px courier;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div></td>
							</tr>
						</table>
					</body>
				</html>";
		$this->email->message($body);
		if(($name!='') && ($company!='') && ($mail!='') && ($interest!='') && ($message!='')){
			if($this->email->send()){
				echo json_encode('success');
				//echo $this->session->set_flashdata('success', '"Thank you for your enquiry. We shall get back to you soon"');
				}
		}else{
			echo json_encode('error');
			//echo $this->session->set_flashdata('error', 'Somthing went wrong!Please try again!');
			}
		//redirect('/');
		
	}
}
