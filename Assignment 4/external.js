var randomno=0;
    var tryouts = 10;
    var currents=10;
    function init()
{
    randomno=Math.floor(Math.random()*101);
    document.getElementById('attempts').innerHTML=currents+" guesses left";
}
    function check_num(){
    var enterno=new Number(document.getElementById('number').value);
    if(enterno==randomno )
{
    alert('Your guess is correct '+randomno+'.\n Restarting game.');
    currents=tryouts;
    init();
}
    else{
    if(enterno>randomno && currents>1)
{
    alert('Guess is higher than selected number');
    currents=currents-1;
    document.getElementById('attempts').innerHTML=currents+" guesses left";
}
    if(enterno<randomno && currents>1)
{
    alert('Guess is lower than selected number');
    currents=currents-1;
    document.getElementById('attempts').innerHTML=currents+" guesses left";
}
    if(currents==1)
    {alert('You ran out of guesses. Correct number was '+randomno+'.\n Restarting game.');
    currents=tryouts;
    init();
}
}
}