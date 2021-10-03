const color_red = document.querySelector('#range_red');
const color_green = document.querySelector('#range_green');
const color_blue = document.querySelector('#range_blue');
function ChangeTheme(){
    localStorage.color_R = color_red.value;
    localStorage.color_G = color_green.value;
    localStorage.color_B = color_blue.value;
    document.querySelector('.user_modal-content').style = 'box-shadow: 0px 0px 8px 6px rgb('+localStorage.color_R+','+localStorage.color_G+','+localStorage.color_B+');';
    document.querySelector('.btn').style = 'rgb('+localStorage.color_R+','+localStorage.color_G+','+localStorage.color_B+');'
}
