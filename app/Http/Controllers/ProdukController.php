<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    //
    public $produk = [
        [
            'id' => 1,
            'image' => 'dreaming freedom.webp',
            'name' => 'Dreaming Freedom',
            'description' => 'Dreaming Freedom is a Korean Webtoon created by 2L. It follows Jeongmin, a high school girl being ruthlessly bullied by Juhyeon, the Queen Bee of her class. The two girls used to be friends as children, until Juhyeon became possessive and wanted Jeongmin to only be friends with her, and their friendship fell apart.',
            'rating' => '4.5/5',
            'status' => 'Ongoing',
            'artist' => '2L',
            'writer' => '2L'
        ],
        [
            'id' => 2,
            'image' => 'Hero_Killer.webp',
            'name' => 'Hero Killer',
            'description' => 'The world is in constant turmoil, with constant wars breaking out between Heroes and Villains. Gifted with supernatural abilities, one lone girl sets out on a bloody path for revenge against the injustices of the world she lives in. With the constant clashes between titans, no one is safe. If no one is willing to protect the innocent, who are the real heroes, and who are the real villains? What truly separates one from the other?',
            'rating' => '4/5',
            'status' => 'Ongoing',
            'artist' => 'Beolkkul',
            'writer' => 'Kkulbeol'
        ],
        [
            'id' => 3,
            'image' => 'Omniscient Reader.jpg',
            'name' => 'Omniscient Reader\'s Viewpoint',
            'description' => '\'Omniscient Reader\' focuses on Kim Dokja , a lonely 28-year-old office worker in Korea who reads web novels as a hobby. On a subway ride home, the web novel Dokja had been reading for the past decade finally comes to an end.',
            'rating' => '5/5',
            'status' => 'Ongoing',
            'artist' => 'Sleepy-C',
            'writer' => 'Sing Shong'
        ],
        [
            'id' => 4,
            'image' => 'roxana.jpg',
            'name' => 'The Way to Protect the Female Lead\'s Older Brother',
            'description' => 'A young woman dies one day, hit by a car on her way back home from college. However, she wakes up reborn in another world, slowly realizing she landed in an adult reverse-harem novel titled "Hell\'s Flower" she read back in her previous life.',
            'rating' => '4.5/5',
            'status' => 'Hiatus',
            'artist' => 'Juniljus',
            'writer' => 'Baek Jiyeon Kin'
        ],
        [
            'id' => 5,
            'image' => 'Trash of the Counts Family.webp',
            'name' => 'Trash of the Count\'s Family',
            'description' => 'Birth of a Hero is an ordinary novel where the kind protagonist, Choi Han, loses everyone he loves and falls deep into desperation. In order to get revenge, he leaves his home and heads to a nearby city where he beats up a low-life, drunken noble who was getting on his nerves, a barely relevant moment for this soon-to-be hero\'s journey.',
            'rating' => '4/5',
            'status' => 'Ongoing',
            'artist' => 'PAN4',
            'writer' => 'Yoo Ryeo Han (유려한)'
        ],
        [
            'id' => 6,
            'image' => 'who made me a princess.jpeg',
            'name' => 'Who Made Me a Princess',
            'description' => 'Who Made Me a Princess follows the journey of Athanasia de Alger Obelia, a South Korean girl who reincarnated into the fictional story, The Lovely Princess, as the abandoned princess of the Obelian Empire.',
            'rating' => '5/5',
            'status' => 'Complete',
            'artist' => 'Spoon (스푼)',
            'writer' => 'Plutus (플루토스)'
        ],
    ];

    public function index()
    {
        $products = $this->produk;

        return view('isi', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        $product = collect($this->produk)->firstWhere('id', $id);

        return view('detail', [
            'product' => $product,
        ]);
    }
}
