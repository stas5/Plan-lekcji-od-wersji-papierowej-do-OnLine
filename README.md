# Plan-lekcji-od-wersji-papierowej-do-OnLine

<p>
Aplikacja umożliwiająca przygotowanie planu lekcji szkoły 
w wersji dostępnej online dla każdego użytkownika - tutaj przykad wykonania <a href="http://www.nuke.2lo.wlodawa.pl/plan.php" target="_blank">www</a>.
</p>


<p>

W skad projektu wchodzą następujace pliki:
</p>

<ol>
<li> klasa.doc</li>
<li> plan.php</li>
<li> conect.php</li>
<li> styl.css</li>
<li> plik.sql</li>
</ol>

<p>
Plik 1 w formacie MSWord zawiera tabele z planem drukowane i wieszane na tablicy z planem szkoły.
W pliku tym znajduje się program utowrzony w jezyku VBA umożliwiajacy wygenerowanie pliku
<blockquote>
    plik.sql
</blockquote> zawierającego instrukcje sql usuwające tabelę szkola jeżeli taka istnieje, tworzące tabelę na nowo, 
oraz dodające informacje o każdej godzinie lekcyjnej każdej klasy szkoły.
Plik 1 powinien zawierać tabele z planami poszczególnych klas w danej szkole wg. zawartego 
wzorca. W przypadku braku tabeli należy utworzyć kopię istniejącej i dodać do niej klasę,
lub klasy.
Ostatnia lekcja ostatniej klasy z tabeli powinna być sformatowana czcionką w kolorze czerwonym, na tej podstawie dodawany 
jest średnik po ostatniej godzinie lekcyjnej planu w pliku sql.
</p>
<p>
Plik 5 powinien być zaimportowany do bazy danych MySQL serwera WWW np. z poziomou PHPMyAdmina.
Pliki 2 3 i 4 powinny być umieszczone i udostepnione do odczytu na serwerze www z obsugą PHP.
</p>
Plik conect.php powinien zawierać parametry dostepu do bazy danych, host i ewentualnie port - użytkownik i haslo dla 
danej szkoly oraz nazwe bazy danych.

