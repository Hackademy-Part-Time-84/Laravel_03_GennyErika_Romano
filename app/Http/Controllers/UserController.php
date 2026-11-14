<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class UserController extends Controller {
 private array $utenti = [
 ['id'=>1,'nome'=>'Genny Romano','email'=>'genny@example.com','ruolo'=>'Amministratrice','bio'=>'Appassionata di libri, cultura e scrittura.'],
 ['id'=>2,'nome'=>'Marco Bianchi','email'=>'marco@example.com','ruolo'=>'Autore','bio'=>'Racconta città e viaggi attraverso la letteratura.'],
 ['id'=>3,'nome'=>'Sara Verdi','email'=>'sara@example.com','ruolo'=>'Autrice','bio'=>'Condivide consigli di lettura e nuove scoperte.'],
 ['id'=>4,'nome'=>'Luca Neri','email'=>'luca@example.com','ruolo'=>'Autore','bio'=>'Ama le librerie indipendenti e la cultura.']
 ];
 public function index(): View { return view('utenti.index',['utenti'=>$this->utenti]); }
 public function show(int $id): View { $utente=collect($this->utenti)->firstWhere('id',$id); abort_if(!$utente,404); return view('utenti.show',compact('utente')); }
}
