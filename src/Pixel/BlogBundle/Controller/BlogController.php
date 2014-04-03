<?php

namespace Pixel\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pixel\BlogBundle\Entity\Post;

class BlogController extends Controller
{
    public function indexAction($page)
    {
        $artParPage = 5;
        
        $listeArticles = $this->getDoctrine()->getManager()->getRepository('PixelBlogBundle:Post')
                              ->getPosts($artParPage, $page);
//        $listeArticles = $rep->findAll();
        
//        $query = $rep->createQueryBuilder('a')
//                     ->orderBy('a.id', 'DESC')
//                     ->setMaxResults(10)
//                     ->getQuery();
            
        
        
        return $this->render('PixelBlogBundle:Blog:index.html.twig', 
                              array('listeArticles' => $listeArticles,
                                    'page' => $page,
                                    'nbrPage' => ceil(count($listeArticles) / $artParPage) ?: 1));
        
    }
    
    
    public function voirAction($id){
        $rep = $this->getDoctrine()->getManager()->getRepository('PixelBlogBundle:Post');
        $article = $rep->find($id);
        
        if($article == null){
            throw $this->createNotFoundException('Article [id='.$id.'] inexistant -__-" ');
        }
        
        return $this->render('PixelBlogBundle:Blog:voir.html.twig', array('article'=> $article));
    }
    
    
    
    
    // **************** PLUS DE FOCNTIONNALITES ! not yet implemented !
    
    public function lastPostsAction($nombre){
            $rep = $this->getDoctrine()->getRepository('PixelBlogBundle:Post');
            
            $query = $rep->createQueryBuilder('a')
                    ->orderBy('a.id', 'DESC')
                    ->setMaxResults($nombre)
                    ->getQuery();
            
            $articles = $query->getResult();
            
         if($articles == null  ){
         }
         
        return $this->render('PixelBlogBundle:Blog:lastPosts.html.twig', array('articles'=> $articles));
        
    }
    public function ajouterAction(){
        
        $article = new Post();
        
        $formBuilder = $this->createFormBuilder($article);
        $formBuilder->add('titre', 'text')
                    ->add('urlAlias', 'text')
                    ->add('content', 'textarea');
        
        $form = $formBuilder->getForm();
        
        $request = $this->get('request');
        
        if( $request->getMethod() == 'POST' ){
            $form->bind($request);
            
            if( $form->isValid() ){
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                
                return $this->redirect($this->generateUrl('blog_voir', array( 'id'=> $article->getId(),
                                                                              'titre'=> $article->getTitre())));
            }
        }
        
        
        
        return $this->render('PixelBlogBundle:Blog:ajouter.html.twig', array('form' => $form->createView() ));
        
        
    }
    
    public function modifierAction($id){
        $this->render('PixelBlog:Blog:modifier.html.twig');
    }
    
    public function supprimerAction($id){
        $this->render('PixelBlog:Blog:supprimer.html.twig');
    }
}