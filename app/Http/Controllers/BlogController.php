<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class BlogController extends Controller {
 private array $articoli = [
 ['id'=>1,'titolo'=>'Il piacere di leggere lentamente','slug'=>'leggere-lentamente','autore'=>'Genny Romano','data'=>'10 novembre 2026','categoria'=>'Libri','immagine'=>'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=900','contenuto'=>'Rallentare la lettura significa concedersi il tempo di entrare davvero nelle storie. Un libro non è una corsa: è uno spazio personale in cui fermarsi, osservare e lasciarsi sorprendere.'],
 ['id'=>2,'titolo'=>'Le città raccontate dai libri','slug'=>'citta-e-libri','autore'=>'Marco Bianchi','data'=>'8 novembre 2026','categoria'=>'Viaggi','immagine'=>'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=900','contenuto'=>'Ci sono città che conosciamo prima ancora di visitarle, grazie alle pagine di un romanzo.'],
 ['id'=>3,'titolo'=>'Come scegliere la prossima lettura','slug'=>'scegliere-prossima-lettura','autore'=>'Sara Verdi','data'=>'6 novembre 2026','categoria'=>'Consigli','immagine'=>'https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=900','contenuto'=>'Ascolta la curiosità, esplora generi diversi e non avere paura di abbandonare un libro che non ti parla.'],
 ['id'=>4,'titolo'=>'Piccole librerie, grandi storie','slug'=>'piccole-librerie','autore'=>'Luca Neri','data'=>'4 novembre 2026','categoria'=>'Cultura','immagine'=>'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=900','contenuto'=>'Le librerie indipendenti sono luoghi di incontro, scoperta e comunità.'],
 ['id'=>5,'titolo'=>'Il valore di un diario di lettura','slug'=>'diario-di-lettura','autore'=>'Anna Rossi','data'=>'2 novembre 2026','categoria'=>'Idee','immagine'=>'https://images.unsplash.com/photo-1455390582262-044cnej?w=900','contenuto'=>'Annotare impressioni e citazioni aiuta a conservare il dialogo che ogni libro apre con chi legge.'],
 ['id'=>6,'titolo'=>'Leggere insieme','slug'=>'leggere-insieme','autore'=>'Paolo Blu','data'=>'30 ottobre 2026','categoria'=>'Comunità','immagine'=>'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=900','contenuto'=>'Un gruppo di lettura trasforma un’esperienza individuale in una conversazione.'],
 ['id'=>7,'titolo'=>'Libri da portare in viaggio','slug'=>'libri-in-viaggio','autore'=>'Marta Gialli','data'=>'28 ottobre 2026','categoria'=>'Viaggi','immagine'=>'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=900','contenuto'=>'Un libro è un compagno leggero che può cambiare il ritmo di un viaggio.'],
 ['id'=>8,'titolo'=>'La magia delle biblioteche','slug'=>'magia-biblioteche','autore'=>'Elena Rosa','data'=>'25 ottobre 2026','categoria'=>'Cultura','immagine'=>'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=900','contenuto'=>'Le biblioteche sono spazi pubblici in cui il sapere diventa accessibile a tutti.']
 ];
 public function home(): View { return view('home',['articoli'=>array_slice($this->articoli,0,6)]); }
 public function index(): View { return view('articoli.index',['articoli'=>$this->articoli]); }
 public function show(string $slug): View { $articolo=collect($this->articoli)->firstWhere('slug',$slug); abort_if(!$articolo,404); return view('articoli.show',compact('articolo')); }
 public function about(): View { return view('about'); }
}
