# Namų darbų paaiškinimas
```
function calculateHomeWorkSum(...$numbers)
```
Funkcija sukuria masyvą iš visų duomenų paduotų į funkciją. Pateikus į funkciją duotus pavyzdinius duomenis **3,2.2,'1'** duomenis sudeda nepriklausomai ar nurodytas skaičius yra string, float, int tipo, todėl funkcijos rezutatas **6.2**  

```
function calculateHomeWorkSum(...$numbers): int
```
Funkcijoje yra panaudotas **: int** parametras, kuris nurodo, koks tipas bus grąžinamas iškvietus funkciją.  
Nors funkcija ir suskaičiuoja sumą pagal skirtingų tipų **(int[3],float[2.2],string[1])** duomenis, tačiau dėl **: int** parametro įtakos rezultatas privalo būti grąžinamas tik **int** tipo, todėl galutinė išvesti yra **6**.  
```( float[6.2] --> int[6] )```


```
function calculateHomeWorkSum(int ...$numbers): int su strict_types=1 deklaracija
```
**strict_types=1** direktyva nurodo, kad faile, kuriame yra deklaruota ši direktyva, kintamieji bus priimami tik tokio tipo, kokio buvo deklaruoti, jei yra panaudojamas kito tipo kintamasis negu buvo deklaruotas, sistema grąžins **TypeError** klaidą dėl netinkamai panaudoto tipo. Tačiau klaida nėra atvaizduojama, nes **strict_types** buvo deklaruota atskirame funckijos faile, o failas, autoloader pagalba, yra importuojamas į index.php failą. Pagal dokumentaciją, direktyva nepaveiks pagrindinio failo, jei failas su direktyva yra importuojamas iš kito failo.  
Todėl funkcija **calculateHomeWorkSum(int ...$numbers): int** veikia be klaidos, o **float** tipo kintamieji verčiami į **int** tipą pagal pirmąjį float kintamojo skaitmenį:   
```(2.8 -> 2)```  
```(1.8 -> 1)```  
```(2.2 -> 2)```  
ir **string** tipo skaitinės reikšmės kintamieji taip pat verčiami į **int** tipą. Galutinis rezultatas: **6**  
