var slider = document.getElementById("temp_slider");
var output = document.getElementById("Celsius");

function set_current_matter__logic(output){
    
    if(parseInt(elements__melting_points[number]) > output.value ){
        current_matter_state="Liquido";
    }
    else if(parseInt(elements__melting_points[number]) < output.value ){
        current_matter_state="Solido";
        if(parseInt(elements__boiling_points[number]) < output.value ){
            current_matter_state="Gas";
        }
    }
    temp_slider.max = parseInt(elements__boiling_points[number]) + (0.2 * parseInt(elements__boiling_points[number]) )
    document.getElementById("normal_state").getElementsByClassName("magnitude")[0].innerHTML = current_matter_state;
}


function set_current_matter() {
    output.value = slider.value; // Display the default slider value
    set_current_matter__logic(output);
    
    slider.oninput = function() {
        output.value = this.value;
        set_current_matter__logic(output);
    }
}

speed = 0
document.getElementById("less_btn").addEventListener('mousedown', e=>{
    intervalId = setInterval(function() {
        output.value = parseInt(output.value)-1-speed;
        slider.value = output.value
        set_current_matter__logic(output);
        speed += 1;
    }, 100);
})
document.getElementById("more_btn").addEventListener('mousedown', e=>{
    intervalId = setInterval(function() {
        output.value = parseInt(output.value)+1+speed;
        slider.value = output.value
        set_current_matter__logic(output);
        speed += 1;

    }, 100);
})
document.getElementById("less_btn").addEventListener('mouseup', () => {
    clearInterval(intervalId);
    speed = 0;

});
document.getElementById("more_btn").addEventListener('mouseup', () => {
    clearInterval(intervalId);
    speed = 0;

});