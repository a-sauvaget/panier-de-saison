<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\ContactService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, ContactService $contactService): Response
    {
        $contact = new Contact(); // Créer un nouveau contact

        $form = $this->createForm(ContactType::class, $contact); // Création formulaire

        $form->handleRequest($request); //Vérification de la requête par le formulaire

        if ($form->isSubmitted() && $form->isValid()) {
            // Ajout des données récupérées par le formulaire
            $contact = $form->getData();
            dump($contact);
            // Exécute fonction stocké dans le service
            $contactService->persistContact($contact);

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            // Envoie form à la vue
            'form' => $form->createView(),
        ]);
    }
}
