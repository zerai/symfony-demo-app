<?php

namespace App\Controller;

use App\Entity\User\User;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class DefaultController
{
    public function __invoke(?User $user, Environment $twig): Response
    {
        return new Response($twig->render('default.html.twig', [
            'user' => $user,
        ]));
    }
}
