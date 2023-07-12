// var fn= function(){

//     rnd = Math.floor( Math.random() * 16 ) + 1;
//     console.log(rnd);

// }

// setInterval(fn,1000);

// console.log("テスト");

var roulette;

function roulette_start(){
    new Promise(function (resolved) {
        roulette = setInterval(function(){
            rnd = Math.floor( Math.random() * 16 ) + 1;
            console.log(rnd);
            resolved();
    },1000);

       
    
    }).then(() =>{    
        console.log("テスト");
    
    });
}

function roulette_stop() {
    if(roulette) {
        clearInterval(roulette);
        // console.log(rnd);  
    }
}

function roulette_start(){
    // new Promise(function (/*resolved*/) {
        roulette = setInterval(function(){
            // ランダムな数値を作成
        console.log("1"); 
        rnd = Math.floor( Math.random() * 16 ) + 1;
        // ルーレット
        change = document.getElementById('num_'+rnd);
        change.style.backgroundColor = 'red';
        console.log("2");

        setTimeout(function(){
            change.style.backgroundColor = '';
            // resolved();
        },300);
        // var fn = function() {
        //     change.style.backgroundColor = '';
        //     console.log("3");
        // }

        // setTimeout(fn,300); 
        
        console.log("4");
        
    },1000);
   
    // })
    // .then(() =>{    
    //     console.log("3");
    
    // });
}