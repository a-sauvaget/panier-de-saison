<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\ContactRepository;
use App\Repository\UserRepository;
use App\Service\ContactService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

/**
 * @link: https://symfony.com/doc/current/console.html
 * Une fois la commande effectuée, on peut voir les mail envoyé grâce au MailCatcher
 */
class SendContactCommand extends Command
{
    private $contactRepository;
    private $mailer;
    private $contactService;
    private $userRepository;
    // symfony console app:send-contact pour lancer le script
    protected static $defaultName = 'app:send-contact';

    /**
     * Used to send mail
     *
     * @link: https://symfony.com/doc/current/mailer.html
     */
    public function __construct(
        ContactRepository $contactRepository, // Récupérer contact en attente d'envoi
        MailerInterface $mailer,
        ContactService $contactService,
        UserRepository $userRepository         // Récupérer mail du product_manager
    ) {
        $this->contactRepository = $contactRepository;
        $this->mailer = $mailer;
        $this->contactService = $contactService;
        $this->userRepository = $userRepository;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $toSend = $this->contactRepository->findBy(['isSend' => false]);
        $adress = new Address(
            $this->userRepository->getProductManager()->getEmail(),
            $this->userRepository->getProductManager()->getFirstName() .
                ' '
                .
                $this->userRepository->getProductManager()->getLastName()
        );

        foreach ($toSend as $mail) {
            $email = (new Email())
                ->from($mail->getEmail())
                ->to($adress)
                // Nom du visiteur
                ->subject('Nouveau message de ' . $mail->getNom())
                // Contenu message
                ->text($mail->getMessage());

            $this->mailer->send($email);

            $this->contactService->isSend($mail);
        }

        return Command::SUCCESS;
    }
}
