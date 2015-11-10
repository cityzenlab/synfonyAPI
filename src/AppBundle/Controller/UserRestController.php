<?php
/**
 * Created by PhpStorm.
 * User: pbborel
 * Date: 10/11/2015
 * Time: 13:58
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class UserRestController extends Controller
{
    public function getUserAction($username){

        // call repo
        $em = $this->getDoctrine()->getManager();
        $userRepository  = $em->getRepository('AppBundle:User');


        return  $userRepository->findByName($username);;
    }

    public function getUserAllAction(){

        // call repo
        $em = $this->getDoctrine()->getManager();
        $userRepository  = $em->getRepository('AppBundle:User');


        return  $userRepository->findAll();;
    }


    public function getUserTestAction(){

        // call repo
         return  "OK";;
    }


}