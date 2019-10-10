# Namų darbų paiškinimas
> **function** calculateHomeWorkSum(...$numbers)

**...$numbers **- Ši kombinacija trijų taškų pagalba sukuria masyvą iš visų duomenų paduotų į funkciją. Pateikus į funkciją duotus pavyzdinius duomenis `3,2.2,'1'`  duomenis sudeda nepriklausomai ar nurodytas skaičius yra **string, float, int** tipo, todėl funkcijos rezutatas `6.2`

> **function** calculateHomeWorkSum(...$numbers): int

**: int**- parametras nurodo, kad visi duomenys paduodami į funkciją turi būti nurodyto tipo, o į funkciją pateikus duotus pavyzdinius duomenis `3,2.2,'1'` gaunamas atsakymas:
`2.2` **float** tipas nėra **int**, todėl skaičius apvalinamas iki `2`, o tai skaičių padaro **int** tipo
`'1'` **string** tipo skaičius automatiškai verčiamas į **int** tipą.
Nurodytos funkcijos rezultatas `6`


> **function** calculateHomeWorkSum(int ...$numbers): int

**int ...**$numbers - parametras nurodo, kad visi duomenys bus paverčiami į **int** tipo duomenis ir tik tada paruošiami grąžinimui. Todėl į funkciją pateikus duotus pavyzdinius duomenis `3,2.2,'1'` 
`2.2` **float** tipo skaičius verčiamas į **int** tipą apvalinant iki `2`.
`'1'` **string** tipo skaičius verčiamas į **int** tipą.
Nurodytos funkcijos rezultas `6`


> **function** calculateHomeWorkSum(int ...$numbers): int su **strict_types=1** deklaracija

**strict_types=1**- deklaracija nurodo, kad visi žemiau naudojami raktažodžiai privalo atitikti tuos, kuriuos nurodoma, vadinasi šiuo atveju pateikti **float,string** kintamieji nebebūtų verčiami į **int** ir tokiu atveju grąžintų klaidą. Tačiau `declare(strict_types=1);` yra deklaruotas funkcijos faile, o funkcija grąžina su `return` duomenis į iššauktą funkciją pradiniame faile, kuriame nėra nurodyta `declare(strict_types=1);`
Į funkciją pateikus duotus pavyzdinius duomenis `3,2.2,'1'` 
`2.2` **float** tipo skaičius verčiamas į **int** tipą apvalinant iki `2`.
`'1'` **string** tipo skaičius verčiamas į **int** tipą.
Nurodytos funkcijos rezultas `6`

> Rezultatai
![Code](http://nfq-siauliai.us.lt/NFQHomeWork1/nfq.png "Code")
