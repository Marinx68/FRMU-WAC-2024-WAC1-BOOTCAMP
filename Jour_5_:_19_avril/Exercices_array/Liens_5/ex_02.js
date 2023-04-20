//Écrivez une fonction JavaScript pour cloner un tableau.

const myArray = ["1", "2", "3", "4",];

function cloneArray(array){
    return array.slice(0);
}

const clonedArray = cloneArray(myArray);