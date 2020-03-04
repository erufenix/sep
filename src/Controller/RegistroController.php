<?php

namespace App\Controller;

use App\Entity\registroSEP;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;


class RegistroController extends AbstractController{

	private $encoders; 
	private $normalizers; 
	private $serializer;
	private $status;    
	private $message;
	private $result;

	public function __construct(UserPasswordEncoderInterface $encoder){
		$this->encoder = $encoder;
		$this->encoders = [new XmlEncoder(), new JsonEncoder()];
		$this->normalizers = [new ObjectNormalizer()];
		$this->serializer = new Serializer($this->normalizers, $this->encoders);         
	}	

  /**
  * @Route("/registro", name="app_registro")
  */
  public function index(){
    return $this->render('registro/registro.html.twig', [
        'controller_name'   => 'RegistroController',
        'app_name'          => 'Registro'
      ]
    );
  }

  /**
   * @Route("/setregistro", name="app_set_registro")
   */
  public function setRegistro(Request $request, MailerInterface $mailer){
		$this->status 	= null;    
		$this->message 	= 'No se pudo completar la acción';
    $this->result 	= [];
    if ($request->isXmlHttpRequest()) {

    }
		return new JsonResponse([
      'status'  => $this->status,
      'message' => $this->message,
      'result'  => json_decode($this->result)
    ],200
  );	        
  }
}
