<?php

namespace App\Controller;

use App\Entity\Teclado;
use App\Form\TecladoType;
use App\Repository\TecladoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/teclado")
 */
class TecladoController extends AbstractController {

    /**
     * @Route("/", name="teclado_index", methods={"GET"})
     */
    public function index(TecladoRepository $tecladoRepository): Response {
        /*
        $em = $this->getDoctrine()->getManager();
        // Get all the offers published by the logged employer
        $loggedin_username = $request->getSession()->get(Security::LAST_USERNAME);
        $offers = $em->getRepository('App:Teclado')->findOffersFromEmployeer($loggedin_username);*/
        return $this->render('teclado/index.html.twig', [
                    'teclados' => $tecladoRepository->findAllAndSortByName(),
        ]);
    }

    /**
     * @Route("/new", name="teclado_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response {
        $teclado = new Teclado();
        $form = $this->createForm(TecladoType::class, $teclado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($teclado);
            $entityManager->flush();

            return $this->redirectToRoute('teclado_index');
        }

        return $this->render('teclado/new.html.twig', [
                    'teclado' => $teclado,
                    'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="teclado_show", methods={"GET"})
     */
    public function show(Teclado $teclado): Response {
        return $this->render('teclado/show.html.twig', [
                    'teclado' => $teclado,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="teclado_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Teclado $teclado): Response {
        $deleteForm = $this->createDeleteForm($teclado);

    $editForm = $this->createForm('App\Form\TecladoType', $teclado);
    $editForm->handleRequest($request);

    if ($editForm->isSubmitted() && $editForm->isValid()) {

      $this->getDoctrine()->getManager()->flush();
      return $this->redirectToRoute('teclado_show', ['id' => $teclado->getId()]);
    }

        return $this->render('teclado/edit.html.twig', [
                    'teclado' => $teclado,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="teclado_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Teclado $teclado): Response {
        if ($this->isCsrfTokenValid('delete' . $teclado->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($teclado);
            $entityManager->flush();
        }

        return $this->redirectToRoute('teclado_index');
    }
    
    /**
   * Creates a form to delete a offer entity.
   * @param Offers $offer The offer entity
   * @return Form The form
   */
  private function createDeleteForm(Teclado $teclado) {
    return $this->createFormBuilder()
      ->setAction($this->generateUrl('teclado_delete', ['id' => $teclado->getId()]))
      ->setMethod('DELETE')
      ->getForm();
  }

}
