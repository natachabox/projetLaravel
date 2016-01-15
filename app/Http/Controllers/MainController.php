<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

/**
 * Class MainController
 * @package App\Http\Controllers
 * Sufficé par le mot clef Controller
 * et doit hérité de la super classe Controller
 */
class MainController extends Controller
{

    public function home()
    {
        return view('accueil'); // accueil.blade.php
    }

    public function contact(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $validator = Validator::make($request->all(),
                [
                    'userName' => 'required|min:2|max:250',
                    'userEmail' => 'required|email',
                    'userPhone' => 'required|numeric',
                    'userMsg' => 'required|max:1000',
                ],
                [
                    'userName.required' => 'Attention le champ nom est vide',
                    'required' => 'Attention le champ est vide',
                ]
            );

            if ($validator->fails())
            {
                return redirect()->route('contact')
                    ->withInput()
                    ->withErrors($validator);
            }

            Mail::send(['emails.contact-email', 'emails.contact-email-text'], ["data" => $request->all()], function ($message) {
                $message->from('natacha.cahorel@gmail.com');
                $message->subject("Formulaire de contact");
                $message->to('natacha.cahorel@gmail.com');
            });

            return redirect()->route('contact')->with('successContact', 'Votre email a bien été envoyé');

        }
        return view('contact'); // contact.blade.php
    }


    public function essai()
    {
        return view('testcode', ["firstname" => "ludo"]);
    }

    public function tableau()
    {

        $products = [
            [
                "id" => 1,
                "title" => "Mon premier produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 10
            ],
            [
                "id" => 2,
                "title" => "Mon deuxième produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 20
            ],
            [
                "id" => 3,
                "title" => "Mon troisième produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 30
            ],
            [
                "id" => 4,
                "title" => "",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 410
            ],
        ];

        //die("go");
        return view('test.fichiertableau', ["bladeProduct" => $products]);
    }

    public function equipe()
    {

        $equipes = [
            [
                "id" => 1,
                "firstname" => "Marc",
                "lastname" => "Toto",
                "chef" => true,
                "description" => "Lorem ipsum",
                "statut" => "chef"
            ],
            [
                "id" => 2,
                "firstname" => "Jean",
                "lastname" => "Michel",
                "chef" => false,
                "description" => "Lorem ipsum",
                "statut" => "graphiste"
            ],
            [
                "id" => 3,
                "firstname" => "Martine",
                "lastname" => "a la plage",
                "chef" => false,
                "description" => "Lorem ipsum",
                "statut" => "developeur"
            ],
        ];

        return view('notreEquipe', ["team" => $equipes]);
    }
}