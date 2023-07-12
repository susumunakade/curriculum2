var roulette;
var rnd;
var confirm = new Array(17);
var i = 1;

console.log(confirm);

function roulette_start(){
    
    roulette = setInterval(function(){
       console.log(confirm[i]);
        // ランダムな数値を作成
        rnd = Math.floor( Math.random() * 16 ) + 1;

        if(confirm[i] !== rnd){
            // ルーレット
            change = document.getElementById('num_'+rnd);
            change.style.backgroundColor = 'red';

            setTimeout(function(){
                change.style.backgroundColor = '';
            },300); 
        }

                   
    },1000);
}

function roulette_stop() {
    if(roulette) {
        clearInterval(roulette);
    }

    if (confirm[i]==null){
        confirm[i] = document.getElementById('num_'+rnd);
        confirm[i].style.backgroundColor = 'red';
        confirm[i] = rnd;
        i++;
    }
}

function reset_num() {
    for( i = 1; i <= confirm.length; i++){
        confirm[i] = document.getElementById('num_' + i);
        console.log(confirm[i]);
        confirm[i].style.backgroundColor = '';
        confirm[i] = '';
    }
}


