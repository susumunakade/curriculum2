var roulette;
var rnd;
var confirm = new Array(17);
var i = 1;


function roulette_start() {
    roulette = setInterval(function() {
        // ランダムな数値を作成
        rnd = Math.floor( Math.random() * 16 ) + 1;
        // ルーレット
        change = document.getElementById('num_'+rnd);
        change.style.backgroundColor = 'red';

        var fn = function() {
            change.style.backgroundColor = '';
        }

        setTimeout(fn,500);       
                
    } ,1000);   


};


function roulette_stop() {
    if(roulette) {
        clearInterval(roulette);
        // console.log(rnd);  
    }

    if (confirm[i]==null){
        confirm[i] = document.getElementById('num_'+rnd);
        console.log(confirm[i]);
        confirm[i].style.backgroundColor = 'red';
        i++;
        console.log(i);
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


