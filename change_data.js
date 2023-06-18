
// Change density values function
_density_value = document.getElementsByClassName("density_select");
_density_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("density").getElementsByClassName("magnitude")[0].innerHTML = change_density();
    }
})
// Change hardness values function
_hardness_value = document.getElementsByClassName("hardness_select");
_hardness_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("hardness").getElementsByClassName("magnitude")[0].innerHTML = change_hardness();
    }
})
// Change ratios values function
_ratio_value = document.getElementsByClassName("ratios_select");
_ratio_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("ratio").getElementsByClassName("magnitude")[0].innerHTML = change_ratio();
    }
})
// Change heats values and units function
latent_heat_value = document.getElementsByClassName("latent_heat_type_select");
latent_heat_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("latent_heat").getElementsByClassName("magnitude")[0].innerHTML = change_latent_heat();
    }
})
unity_heat_value = document.getElementsByClassName("latent_heat_unity_select");
unity_heat_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("latent_heat").getElementsByClassName("magnitude")[0].innerHTML = change_latent_heat();
    }
})
sensible_heat_type_value = document.getElementsByClassName("sensible_heat_unity_select");
sensible_heat_type_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("sensible_heat").getElementsByClassName("magnitude")[0].innerHTML = change_specific_heat();
    }
})
// Change electonic-affinity values function
electonic_affinity_value = document.getElementsByClassName("electronic_affinity_select");
electonic_affinity_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("electronic_affinity").getElementsByClassName("magnitude")[0].innerHTML = change_electronics( elements__electronic_affinities[number],0);
    }
})
// Change ionization_energy values function
ionization_energy_value = document.getElementsByClassName("ionization_energy_select");
ionization_energy_value[0].addEventListener('click', e=>{
    if (number !=0){
        document.getElementById("ionization_energy").getElementsByClassName("magnitude")[0].innerHTML = change_ionization( elements__ionization_energies[number],0);
    }
})


function change_density(){
    if (number !=0){
        _density_value = document.getElementsByClassName("density_select")[0].value;
        if (_density_value== "g/cm3"){
            return(elements__densities[number])
        }  
        else{
            return(elements__densities[number]*1000)
        }
    }
}
function change_hardness(){
    if (number !=0){
        _hardness = document.getElementsByClassName("hardness_select")[0].value;
        if (_hardness == "mohs"){
            return(elements__hardness_mohs[number])
        }  
        else if (_hardness == "vickers"){
            return(elements__hardness_vickers[number])
        }  
        else{ // brinell
            return(elements__hardness_brinell[number])
        }
    }
}

function change_ratio(){
    if (number !=0){
        _ratio = document.getElementsByClassName("ratios_select")[0].value;
        if (_ratio == "empyrical"){
            return(elements__empyrical_ratios[number])
        }  
        else if (_ratio== "calculated"){
            return(elements__calculated_ratios[number])
        }  
        else if (_ratio == "vanderwaals"){
            return(elements__vanderwaals_ratios[number])
        } 
        else if (_ratio == "covalentsimple"){
            return(elements__covalentsimple_ratios[number])
        }  
        else if (_ratio == "covalenttriple"){
            return(elements__covalenttriple_ratios[number])
        } 
        else{ // metalic
            return(elements__metalic_ratios[number])   
        }
    }
}


function change_specific_heat(){
    if (number !=0){
        _heat_unit = document.getElementsByClassName("sensible_heat_unity_select")[0].value;
        if (elements__specific_heats[number] == "N/A"){
            return("--")
        }
        if (_heat_unit == "J/kgK"){
            return(elements__specific_heats[number])
        }  
        else{
            return((elements__specific_heats[number]/4.18).toFixed(3))       
        }
    }
}
function change_latent_heat(){
    if (number !=0){
        _heat_type = document.getElementsByClassName("latent_heat_type_select")[0].value;
        _heat_unit = document.getElementsByClassName("latent_heat_unity_select")[0].value;
        if ((elements__vaporizationheats[number] == "N/A") || (elements__fusionheats[number] == "N/A")){
            return("--")
        }

        if (_heat_type== "fusion"){
            console.log(_heat_type, _heat_unit)

            if (_heat_unit == "kJ/mol"){
                return(elements__fusionheats[number])
            }  
            else{
                return((elements__fusionheats[number]/4.18).toFixed(3))
            }
        }  
        else{
            console.log(_heat_type, _heat_unit)

            if (_heat_unit == "kJ/mol"){
                return(elements__vaporizationheats[number])
            }  
            else{
                return((elements__vaporizationheats[number]/4.18).toFixed(3))
            }       
        }
    }
}
function change_ionization(eV, html_element){
    if (number !=0){
        _ionization_energy_value = document.getElementsByClassName("ionization_energy_select")[html_element].value;
        if (elements__ionization_energies[number] == "N/A"){
            return("--")
        }
        else if (_ionization_energy_value== "eV"){
            return(eV)
        }  
        else{
            return((eV*96.4916).toFixed(3))
        }
    }
}
function change_electronics(eV, html_element){
    if (number !=0){
        _electronic_affinity_value = document.getElementsByClassName("electronic_affinity_select")[html_element].value;
        if (_electronic_affinity_value== "eV"){
            return(eV)
        }  
        else{
            return((eV*96.4916).toFixed(3))
        }
    }
}


// Change temperature values function
temperature_value = document.getElementsByClassName("temperature_select");
temperature_value[0].addEventListener('click', e=>{
    if (number !=0){
        melting_point = document.getElementById("melting_point").getElementsByClassName("magnitude")[0].innerHTML = change_temperature( elements__melting_points[number],0);
    }
})
temperature_value[1].addEventListener('click', e=>{
    if (number !=0){
        boiling_point = document.getElementById("boiling_point").getElementsByClassName("magnitude")[0].innerHTML = change_temperature( elements__boiling_points[number],1);
    }
})
function change_temperature(kelvin, html_element){
    if (number !=0){
        _temperature_value = document.getElementsByClassName("temperature_select")[html_element].value;
        if (kelvin == "N/A"){
            return("--")
        }
        if (_temperature_value == "F"){
            return((( kelvin - 273.15) *9/5 + 32).toFixed(3))
        }   
        else if (_temperature_value == "C"){
            return( (kelvin - 273.15).toFixed(3))
        }
        else{
            return( kelvin)
        }
    }

}
