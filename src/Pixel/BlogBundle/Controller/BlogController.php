<?php

namespace Pixel\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($page)
    {
        if($page < 1){
            throw $this->createNotFoundException('Page inexistante ('.$page.') !');
        }
        
        return $this->render('PixelBlogBundle:Blog:index.html.twig');
        
    }
    
    
    public function voirAction($id){
        return $this->render('PixelBlogBundle:Blog:voir.html.twig', array('id'=> $id));
    }
    
    public function ajouterAction(){
        if( $this->get('request')->getMethode() == 'POST' ){
            $this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré ;)');
            
            $this->redirect($this->generateUrl('blog_voir', array('id' => 45)));
        }
        
        $this->render('PixelBlog:Blog:ajouter.html.twig');
    }
    
    public function modifierAction($id){
        $this->render('PixelBlog:Blog:modifier.html.twig');
    }
    
    public function supprimerAction($id){
        $this->render('PixelBlog:Blog:supprimer.html.twig');
    }
}