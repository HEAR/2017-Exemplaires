<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
   $form = new Form([
      'email' => [
         'rules' => ['required', 'email'],
         'message' => 'Veuillez entrer une adresse valide',
      ],
      'nom' => [],
      'message' => [
         'rules' => ['required'],
         'message' => 'Veuillez entrer un message',
      ],
   ]);

   if (r::is('POST')) {
      $form->emailAction([
         'to' => 'florian.fromager@hear.fr',
         'from' => 'info@example.com',
         'subject' => 'Nouvelle requete de la part de {email}',
      ]);
   }

   return compact('form');
};