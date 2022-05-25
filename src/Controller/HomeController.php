<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {   $daouda = "Daouda"; 

        return $this->render('home/index.html.twig',
    [
        'admin'=>$daouda, 
        
    ]);
    }


    //  /**
    //  * @Route("/", name="home")
    //  */
    // public function Contact(ContactRepository $ripo)
    // {
    //     $post = $ripo->findAll();

    //     return $this->render('home/index.html.twig', [
    //         'post' => $post
    //     ]);
    // }

    // /**
    //  * @Route("/post/{id}", name="show_post")
    //  */
    // public function show(Contact $post)
    // {
    //     return $this->render('home/post.html.twig', [
    //         'post' => $post
    //     ]);
    // }
}