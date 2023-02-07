const countdown = () => {
    const countDate = new Date('Febuari 10, 2023 00:00:00').getTime();
    const now = new Date();

    const gap = countDate - now;
     
    //set up 
    const second = 1000;
    const minute = second * 60;
    const hours = minute * 60;
    const day = hours * 24;

    //calcute 
    const textDay = Math.floor(gap / day);
    const textHour = Math.floor((gap % day) / hours);
    const textMinute = Math.floor((gap % hours) / minute);
    const textSecond = Math.floor((gap % minute) / second);

    //update 
    document.querySelector('.day').innerText = textDay;
    document.querySelector('.hours').innerText = textHour;
    document.querySelector('.minute').innerText = textMinute;
    document.querySelector('.second').innerText = textSecond;
};
setInterval(countdown, 1000);
