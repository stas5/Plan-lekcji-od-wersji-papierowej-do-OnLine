# Plan-lekcji-od-wersji-papierowej-do-OnLine

<p>
Aplikacja umożliwiająca przygotowanie planu lekcji szkoły 
w wersji dostępnej online dla każdego użytkownika <a href="http://www.nuke.2lo.wlodawa.pl/plan.php" target="_blank">www</a>.
</p>


<p>

W skad projektu wchodzą następujace pliki:
</p>

<ol>
<li> klasa.doc</li>
<li> plan.php</li>
<li> conect.php</li>
<li> styl.css</li>
<li> plik</li>
<li>tabela.sql</li>
</ol>

<p>
Plik 1 zawiera tabele z planem drukowane i wieszane na tablicy z planem szkoły.
W pliku tym znajduje się program utowrzony w jezyku VBA umożliwiajacy wygenerowanie pliku
<blockquote>
    plik
</blockquote> bez rozszerzenia, zawierajacego informacje o każdej godzinie 
lekcyjnej w danej szkole.
Plik powinien zawierać tabele z planami poszczególnych klas w danej szkole wg. zawartego 
wzorca.
</p>


<p>
Plik 5 powinien być zaimportowany do tabeli <blockquote>
                                                klasa
                                            </blockquote> serwera WWW bazy danych MySql.
Pliki 2 3 i 4 powinny być umieszczone na serwerze www z obsuga php i 
zawierajcego tabelę klasa po wykonaniu poleceń
z pliku <q>tabela.sql</q> i zaimportowaniu pliku <q>plik</q>.
</p>

