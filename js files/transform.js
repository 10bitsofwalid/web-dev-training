const words = ["Cars", "Trucks", "Buses", "Trains", "Planes", "Ships"];
const Nwords = [];
for(let i=0; i<words.length; i++){
    const transform = words[i].toLocaleUpperCase();
    Nwords.push(transform);
}
console.log(Nwords);