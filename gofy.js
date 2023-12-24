let img = document.querySelector('.imgee');

let gofy = document.querySelector('.gofy');

function photo(photo){
    img.src=photo;
}
function colors(color){
    gofy.style.background=color;
}

function popup(){
    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      )
}