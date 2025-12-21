const number = [15, 2, 3, 6, 7, 8, 4];
const lNum = [];

for(const num of number){
    if(num > 10){
        lNum.push(num);
    }
}
console.log(lNum);