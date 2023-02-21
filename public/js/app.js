// function modWindowInsert() {
//     document.querySelector('.buttons_form').innerHTML = '<span style="font-size:20px;height:auto;opacity:0.6;">Are you sure?</span>'+'<input type="submit" value="INSERT!">';
//     return;
// }
// function modWindowUpdate() {
//     document.querySelector('.buttons_form').innerHTML = '<span style="font-size:20px;height:auto;opacity:0.6;">Are you sure?</span>'+'<input type="submit" value="UPDATE!">';
//     return;
// }
function modWindowDelete() {
    document.querySelector('.buttons_form').innerHTML = '<span style="font-size:20px;height:auto;opacity:0.6;">Are you sure?</span>'+'<input type="submit" value="DELETE!">';
    return;
}
let clickCounter = 0;
function sortByheight() {
    let massiveHeight = [];
    let heightCounter = 0;
    let tableLength = document.querySelector('table').tBodies[0].rows;
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(4).innerHTML.replace('cm','');
        massiveHeight.push(elem);
    }
    if(clickCounter % 2 == 0) {
        clickCounter += 1;
        massiveHeight.sort(function(a, b){return b-a});
    }else{
        clickCounter += 1;
        massiveHeight.sort(function(a, b){return a-b});
    }
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(4).innerHTML.replace('cm','');
        if(massiveHeight[heightCounter] == elem) {
            const oldTr = tableLength.item(heightCounter).innerHTML;
            tableLength.item(heightCounter).innerHTML = tableLength.item(i).innerHTML;
            tableLength.item(i).innerHTML = oldTr;
            heightCounter += 1;
            i = 0;
        }

    }
    return;
}
function sortByWeight() {
    let massiveWeight = [];
    let weightCounter = 0;
    let tableLength = document.querySelector('table').tBodies[0].rows;
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(5).innerHTML.replace('kg','');
        massiveWeight.push(elem);
    }
    if(clickCounter % 2 == 0) {
        clickCounter += 1;
        massiveWeight.sort(function(a, b){return b-a});
    }else{
        clickCounter += 1;
        massiveWeight.sort(function(a, b){return a-b});
    }
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(5).innerHTML.replace('kg','');
        if(massiveWeight[weightCounter] == elem) {
            const oldTr = tableLength.item(weightCounter).innerHTML;
            tableLength.item(weightCounter).innerHTML = tableLength.item(i).innerHTML;
            tableLength.item(i).innerHTML = oldTr;
            weightCounter += 1;
            i = 0;
        }

    }
    return;
}
function sortByAge() {
    let massiveAge = [];
    let ageCounter = 0;
    let tableLength = document.querySelector('table').tBodies[0].rows;
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(3).innerHTML.replace(' y.o.','');
        massiveAge.push(elem);
    }
    if(clickCounter % 2 == 0) {
        clickCounter += 1;
        massiveAge.sort(function(a, b){return b-a});
    }else{
        clickCounter += 1;
        massiveAge.sort(function(a, b){return a-b});
    }
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(3).innerHTML.replace(' y.o.','');
        if(massiveAge[ageCounter] == elem) {
            const oldTr = tableLength.item(ageCounter).innerHTML;
            tableLength.item(ageCounter).innerHTML = tableLength.item(i).innerHTML;
            tableLength.item(i).innerHTML = oldTr;
            ageCounter += 1;
            i = 0;
        }

    }
    return;
}
function sortBySurname() {
    let massiveSurname = [];
    let surnameCounter = 0;
    let tableLength = document.querySelector('table').tBodies[0].rows;
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(2).innerHTML;
        massiveSurname.push(elem);
    }
    massiveSurname.sort();
    if(clickCounter % 2 == 0) {
        clickCounter += 1;
    }else{
        clickCounter += 1;
        massiveSurname.reverse();
    }
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(2).innerHTML;
        if(massiveSurname[surnameCounter] == elem) {
            const oldTr = tableLength.item(surnameCounter).innerHTML;
            tableLength.item(surnameCounter).innerHTML = tableLength.item(i).innerHTML;
            tableLength.item(i).innerHTML = oldTr;
            surnameCounter += 1;
            i = 0;
        }

    }
    return;
}
function sortByName() {
    let massiveName = [];
    let nameCounter = 0;
    let tableLength = document.querySelector('table').tBodies[0].rows;
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(1).innerHTML;
        massiveName.push(elem);
    }
    massiveName.sort();
    if(clickCounter % 2 == 0) {
        clickCounter += 1;
        massiveName.sort();
    }else{
        clickCounter += 1;
        massiveName.reverse();
    }
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(1).innerHTML;
        if(massiveName[nameCounter] == elem) {
            const oldTr = tableLength.item(nameCounter).innerHTML;
            tableLength.item(nameCounter).innerHTML = tableLength.item(i).innerHTML;
            tableLength.item(i).innerHTML = oldTr;
            nameCounter += 1;
            i = 0;
        }

    }
    return;
}
function sortById() {
    let massiveId = [];
    let idCounter = 0;
    let tableLength = document.querySelector('table').tBodies[0].rows;
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(0).innerHTML;
        massiveId.push(elem);
    }
    if(clickCounter % 2 == 0) {
        clickCounter += 1;
        massiveId.sort(function(a, b){return b-a});
    }else{
        clickCounter += 1;
        massiveId.sort(function(a, b){return a-b});
    }
    for(let i = 0; i < tableLength.length; i++){
        let elem = tableLength.item(i).cells.item(0).innerHTML;
        if(massiveId[idCounter] == elem) {
            const oldTr = tableLength.item(idCounter).innerHTML;
            tableLength.item(idCounter).innerHTML = tableLength.item(i).innerHTML;
            tableLength.item(i).innerHTML = oldTr;
            idCounter += 1;
            i = 0;
        }

    }
    return;
}