# Todo-List app

## Översikt 
#### Detta är en enkel todo-list applikation som är utvecklad med PHP och MySQL. Det låter användare lägga till, redigera och ta bort uppgifter, samt markera dem som slutförda eller ofullständiga. Användare måste logga in för att komma åt applikationen, och uppgifter är endast synliga för användaren som lagt till dem.

<br>

## Användning


#### 1. Logga in eller registrera . <br> 2. Lägg till en ny uppgift genom att ange uppgiftens titel och beskrivning i formuläret högst upp på sidan och klicka på knappen Add Task. <br> 3. Redigera en uppgift genom att klicka på knappen Redigera bredvid den och göra önskade ändringar i formuläret som visas. <br> 4. Ta bort en uppgift genom att klicka på knappen Delete bredvid den. <br> 5. Markera en uppgift som slutförd genom att klicka på knappen Mark As Complete bredvid den. <br> 6. Ta bort alla slutförda uppgifter genom att klicka på knappen Delete Completed Tasks längst ned på sidan. <br> 7. Logga ut genom att klicka på knappen Logout högst upp på sidan.

<br>

## Layout

#### För veta hur det funkar på sidan, finns det följande steg och bilder att visa:


#### 1. Inloggningsidan där det visar loggningsuppgifter och formulärer.
![img1](./img/Screenshot%20(129).png)

<br>

#### 2. Inloggningsidan där man anger fel inloggningsuppgifter som visas meddelandet på toppen.
![img2](./img/Screenshot%20(153).png)

<br>

#### 3. Sida där det visar uppgifterna för registrering och lagt in formulären för skapa ny användare

![img3](./img/Screenshot%20(130).png)

<br>

#### 4. Adminer sida i Mysql där det visar en tabell(users) i en databas(todo_list) och datan i tabellen visar följande ny användare som har skapat i bilden på punkt 3. (och ytterligare en annan ny användare)

![img4](./img/Screenshot%20(131).png)
![img5](./img/Screenshot%20(132).png)

<br>

#### 5. Standardsida efter en användare (Zack) loggade in, där det visar funktionen och knapparna samt formulären för lägga till uppgifter

![img6](./img/Screenshot%20(148).png)

<br>

#### 6. Standardsidan som visar två upplagda uppgifter (tasks) efter att ha fyllt i formulären titeln och beskrivningen och sedan tryckit på knappen

![img7](./img/Screenshot%20(133).png)

<br>

#### 7. Standardsidan som visar funktionen att redigera uppgiften i formuläret och sedan trycker på knappen så det blir sparat.

![img8](./img/Screenshot%20(134).png)
![img9](./img/Screenshot%20(135).png)

<br>

#### 8. Standardsidan som visar en ny uppgift som har skapat. En annan bild som visar admin sidan i mysql visar de sparade uppgifter/data i en annan tabell (tasks) i databasen(todo_list)

![img10](./img/Screenshot%20(137).png)
![img11](./img/Screenshot%20(136).png)
![img12](./img/Screenshot%20(138).png)

<br>

#### 9. Standardsidan som visar funktionen att kunna radera uppgiften genom att trycka på knappen (Delete) vilket senare uppdaterar listan och då blir det två styckna igen.

![img13](./img/Screenshot%20(139).png)
![img14](./img/Screenshot%20(140).png)

<br>

#### 10. Standardsidan som visar funktionen att kunna markera en uppgift som klart genom knappen (Mark as Completed) vilket ändrar status från röd (Incomplete) till grön (Completed).

![img15](./img/Screenshot%20(141).png)
![img16](./img/Screenshot%20(142).png)
![img17](./img/Screenshot%20(143).png)
![img18](./img/Screenshot%20(144).png)

<br>

#### 11. Standardsidan som visar funktionen att kunna radera en markerad uppgift genom knappen (Delete Completed Task) vilket ska ta bort alla markerade uppgifter som finns

![img19](./img/Screenshot%20(145).png)


<br>

#### 12. Standardsidan som visar en ny uppgift i listan efter att ha tagit bort föregående uppgifter.

![img20](./img/Screenshot%20(146).png)

<br>

#### 13. Inloggningssidan som visas igen efter att ha loggat ut ur en användarens lista genom en knapp (Logout).

![img21](./img/Screenshot%20(146).png)
![img22](./img/Screenshot%20(129).png)

<br>

#### 14. Bild som visar att fylla in den andra användarens (Mac) inloggningsuppgifter i formuläret som sedan ska vidare till standardsida vilket är deras separata lista.

![img23](./img/Screenshot%20(147).png)
![img24](./img/Screenshot%20(148).png)

<br> 

#### 15. Standardsidan som visar den andra användaren (Mac) skapade ny uppgift som är sparad i listan

![img25](./img/Screenshot%20(151).png)

<br>

#### 16. Admin sidan i Mysql som visar tasks tabellen i databasen(todo_list) där datan sparas från båda användarens uppgifter i deras nuvarande lista.

![img26](./img/Screenshot%20(152).png)