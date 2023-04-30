// let tm = 0;
var roulette;

function roulette_start(){
    roulette = setInterval(function() {
        // 1〜99の範囲でランダムな数値を作成
        var rnd = Math.floor( Math.random() * 16 ) + 1;
        // ルーレット
        change = document.getElementById('num_'+rnd);
        change.style.backgroundColor = 'red';

        var fn = function() {
            change.style.backgroundColor = '';
        }

        setTimeout(fn,500);      

                
    } ,1000);   
    
    console.log(rnd);
}


function roulette_stop() {
    if(roulette) {
        clearInterval(roulette);
    }
}



// function roulette_start(){
    
//     for(let i = 1; i <= 50;i++){ 
    
        
//         var rnd = Math.floor(Math.random() * 16)+1;
//         let change = document.getElementById('num_' + rnd);

//         var fn = function(){

//         change.style.backgroundColor = 'red';
        
//         }
    

//         setTimeout(fn,tm);
//         tm += 500;


// //break


//         var fn = function(){
//         change.style.backgroundColor = '';
//         }
        
//         // console.log(change);
//         setTimeout(fn,tm);
//         tm += 500;

        
                

//         // function rulet_stop(){
//         //     // console.log(fin);
//         //     let stop_no = document.getElementById('num_' + rnd)
//         //     stop_no.style.backgroundColor = 'red';
//         // }
         
//     }

//     console.log('num_' + rnd);
//     // let stop_num = rnd;
//     return rnd;
      
    
// }
// var confirm_no = roulette_start()
// // var confirm_fin = document.getElementById('num_'+ confirm_no);
// // confirm_no.style.backgroundColor = 'red'; 
// console.log(confirm_no);






