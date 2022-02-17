<?php

namespace App\Controller;

use App\Entity\Group;
use App\Form\GroupType;
use App\Repository\GroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="group_index")
     */
    public function index(GroupRepository $GroupRepository): Response
    {
        return $this->render('group/index.html.twig', [
            'Groups' => $GroupRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="Group_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $group = new Group();
        $form = $this->createForm(GroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($group);
            $entityManager->flush();

            return $this->redirectToRoute('group_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('group/new.html.twig', [
            'group' => $group,
            'form' => $form,
        ]);

     }

    /**
     * @Route("/{id}", name="Group_show", methods={"GET"})
     */
    public function show(Group  $Group): Response
    {
        return $this->render('Group/show.html.twig', [
            'Group' => $Group,
        ]);
    }



    /**
     * @Route("/{id}/edit", name="group_edit", methods={"GET","POST"})
     */
    public function edit(Request $request,Group $group): Response
    {
        $form = $this->createForm(GroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('group_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('group/edit.html.twig', [
            'group' => $group,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="group_delete", methods={"POST"})
     */
    public function delete(Request $request, Group $group): Response
    {
        if ($this->isCsrfTokenValid('delete'.$group->getId(), $request->Request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('group_index', [], Response::HTTP_SEE_OTHER);
    }
}
