//Écrivez un programme JavaScript pour trouver l'élément le plus fréquent d'un tablea

const array = [3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];
let max = 0;
let value = null;


for (let i = 0; i < array.length; i++) {
    const result = array.filter(element => element === array[i]);
        if(max < result.length) {
           max = result.length;
           value = array[i];
        }
    }
    // console.log(max, value);