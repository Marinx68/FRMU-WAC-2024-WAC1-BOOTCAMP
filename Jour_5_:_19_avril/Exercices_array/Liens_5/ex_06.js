//Écrivez un programme JavaScript qui accepte un nombre en entrée et insère des tirets (-) entre chacun des deux nombres pairs. Par exemple, si vous acceptez 025468, la sortie doit être 0-254-6-8.

function checkNumber(){
    var number;
    if(number%2 == 0){
        return number . "-";
    }else {
        return number;
    }
}