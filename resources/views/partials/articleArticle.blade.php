<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1 class="text-center mt-11 text-4xl">Page articles</h1>

    <article class="m-20 mt-20 ">
        <h1 class="text-4xl">La guerre en Ukraine</h1>
        <img class="mb-20" style="width: 550px;"
            src="https://img.lemde.fr/2022/04/07/416/0/5000/2500/1600/800/60/0/3f68cc0_1649323426625-221132.jpg" alt="">

        <p>
            L’OMS réclame l’accès humanitaire à Marioupol et condamne les agressions contre le système de santé
            ukrainien
            L’Organisation mondiale de la santé (OMS) a demandé jeudi l’accès humanitaire à la ville ukrainienne de
            Marioupol assiégée par les forces russes. Jusqu’à présent, l’OMS « a pu livrer 185 tonnes de matériel
            médical aux zones les plus touchées du pays, permettant d’atteindre un demi-million de personnes », a
            déclaré le directeur de la branche européenne de l’OMS, Hans Kluge. « Mais il est vrai que certaines restent
            très difficiles », a-t-il reconnu, lors d’une conférence de presse diffusée depuis Lviv dans l’ouest de
            l’Ukraine. « Je pense que la priorité, clairement, est Marioupol », a-t-il affirmé.

            L’OMS a également relevé à 91 son dernier bilan d’attaques confirmées contre le système de santé ukrainien
            (hôpitaux, ambulances, soignants…). L’organisation n’a pas directement attribué la responsabilité de ces
            attaques, soulignant « ne pas avoir de mandat » pour le faire. Alors que la Russie concentre désormais ses
            troupes dans l’est de l’Ukraine en vue d’une probable nouvelle offensive, l’OMS « envisage tous les
            scénarios », depuis « devoir continuer à traiter des victimes en masse » jusqu’à « des attaques chimiques »,
            a-t-il affirmé. « Il n’y a pas d’assurance que la guerre ne va pas empirer », a reconnu M. Kluge.
        </p>

    </article>
    <div class="flex flex-wrap">
        @foreach ($articles as $article)
            <div
                class="max-w-2xl flex flex-col justify-between my-5 px-8 py-4 mx-auto bg-gray-100 rounded-lg shadow-md dark:bg-green-700">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{ $article->titre }}</span>
                    <a
                        class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">{{ $article->user->name }}</a>
                </div>

                <div class="mt-2">
                    <p class="font-bold text-gray-700 dark:text-white">{{ $article->texte }}</p>
                </div>

                <div class="flex justify-end">
                    <a href="/article/{{ $article->id }}" class="text-white bg-green-700 mr-2 px-2 rounded">Lire
                        l'article</a>
                    @if (Auth::user()->role->role == 'admin' || Auth::user()->role->role == 'webmaster' || (Auth::user()->role->role == 'redacteur' && $article->user->id == Auth::user()->id) )
                        <a href="/article/{{ $article->id }}/edit" class="text-white bg-black mr-2 px-2 rounded">Modifier
                            l'article</a>
                        <form action="/article/{{ $article->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-white bg-red-700 px-2 rounded">Supprimer</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
