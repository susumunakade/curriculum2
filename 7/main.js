
// Q1

console.log("問１");

let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven() {
    for(let i = 0; i < numbers.length;i++){
        if(numbers[i] % 2 === 0){
            console.log(numbers[i] + 'は偶数です');
        }
    }    
}

isEven();

// Q2

console.log("");
console.log("問２");

class Car{
    constructor(gass, car_number){
        this.gass = gass;
        this.car_number = car_number;
    }

    getNamGas(){
        console.log("ガソリンは" + this.gass + "です");
        console.log("ナンバーは" + this.car_number + "です");
    }
}

let make_Car = new Car(100, 1234);
make_Car.getNamGas();

