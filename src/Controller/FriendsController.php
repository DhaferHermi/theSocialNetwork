<?php

namespace App\Controller;

use App\Entity\FriendStatus;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FriendsController extends AbstractController
{
    /**
     * @Route("/friends", name="friends")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($this->getUser()->getUserIdentifier());
        $friends=$user->getUserA();
        return $this->render('friends/index.html.twig', [
            'friends' => $friends,
        ]);
    }

    /**
     * @Route("/acceptfriend/{id}", name="acceptfriend")
     */
    public function acceptFriend($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $friendStatus = $em->getRepository(FriendStatus::class)->find($id);
        $friendStatus->setStatus("friends");
        $em->persist($friendStatus);
        $em->flush();
        return $this->render('friends/index.html.twig', [


        ]);
    }

    /**
     * @Route("/rejectfriend/{id}", name="rejectfriend")
     */
    public function rejectFriend($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $friendStatus = $em->getRepository(FriendStatus::class)->find($id);
        $em->remove($friendStatus);
        $em->flush();
        return $this->render('friends/index.html.twig', [


        ]);
    }
}
