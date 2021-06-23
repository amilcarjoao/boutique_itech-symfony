<?php 
 
namespace App\Controller; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\HttpFoundation\Response; 
 
class MailController extends AbstractController 
{ 
    /** 
     * @Route("/mail", name="mail") 
     */ 
    public function index(\Swift_Mailer $mailer) 
    { 
        $message = (new \Swift_Message('Hello Email de notre Boutique  ! ')) 
        ->setFrom('contact@amilcarjoao.com') 
        ->setTo('amilcarki@outlook.com') 
        ->setBody( 
            $this->renderView( 
 
                'emails/registration.html.twig' 
            ), 
            'text/html' 
        ); 
        $mailer->send($message); 
        return new Response('Message envoyé | Boutique AMILTECH');  
    } 
} 