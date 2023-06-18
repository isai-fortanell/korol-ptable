// Change information of element
last_clicked = "";
slider_switch = true;
element_clicked = false;
current_matter_state = ""
element_visualization = document.getElementsByClassName("elementv-general")[0];
document.getElementsByClassName("switch_container")[0].style.visibility = "hidden";
document.addEventListener('mouseover', function(e) {
    e = e || window.event;
    let target = e.target
    if (target.className.slice(0,10) != "ch_element"){
        target = target.parentElement;
    }
    if (target.className=="switch"){
        const checkbox = document.querySelector('.switch input');

        // Comprobar si está "checked"
        if (checkbox.checked) {
            slider_switch = true;
        } else {
            slider_switch=false;
        }
    }
    if (target.className.slice(0,10) == "ch_element"){
        target.addEventListener('click', e=>{
            // Only when element is clicked: ....code
            number = target.children[0].innerText;            
            // Back clicked styles to normal 
            if (last_clicked != ""){
                // STYLE LAST ELEMENT CLICKED (BACK TO NORMAL)
                last_clicked.style.background= ""; 
                last_clicked.children[0].style.color = "#986D8E";
                last_clicked.children[1].style.color = "#eee";
                last_clicked.children[2].style.color = "#eee";
                last_clicked.children[3].style.color = "#986D8E";
                last_clicked.style.zIndex = 0;

                anime({
                    targets: last_clicked,
                    scale: (1),
                    duration: 400,
                })
                context.clearRect(0, 0, canvas.width, canvas.height);
                canvas.style.transform = "";
                canvas.style.transition = "";
            }
            // ELEMENT CLICKED ANIMATION-STYLES
            anime({
                targets: target,
                scale: (1.25),
                duration: 600,
            })
            // target.style.padding= "4px";
            // target.style.border= "2px solid #eee";
            target.style.background =  'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, .7)), url(https://images.unsplash.com/photo-1541701571234-ffe036ddf1d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1326&q=80)';
            target.style.backgroundPosition = 'center';
            target.style.backgroundSize = "300px 200px";
            target.children[0].style.color = "#EFEFEF";
            target.children[1].style.color = "#FFFFFF";
            target.children[2].style.color = "#EDEDED";
            target.style.fontWeight = "bold";
            target.children[3].style.color = "#CFCFCF";
            target.style.zIndex = 2;
            last_clicked = target;
            
            document.getElementById("element_name").innerHTML = target.children[2].innerText.toUpperCase();
            console.log(document.getElementsByClassName("name__visualization"))
            document.getElementsByClassName("atomic_number__visualization")[0].innerHTML = target.children[0].innerText;
            document.getElementsByClassName("atomic_number__visualization")[1].innerHTML = target.children[0].innerText;
            document.getElementsByClassName("symbol__visualization")[0].innerHTML = target.children[1].innerText;
            document.getElementsByClassName("symbol__visualization")[1].innerHTML = target.children[1].innerText;
            element_visualization.children[1].innerHTML = target.children[1].innerText;
            element_visualization.children[2].innerHTML = target.children[2].innerText;
            element_visualization.children[3].innerHTML = target.children[3].innerText;
            
            canvas = document.getElementById("atomic_model");
            context = canvas.getContext("2d");
            electron_for_render = canvas.getContext("2d");
            render_atomic_moodel(number, canvas, context, electron_for_render)
            document.getElementsByClassName("switch_container")[0].style.visibility = "visible";

            // Aside information
            serie = document.getElementById("serie").getElementsByClassName("magnitude")[0]
            serie.innerHTML = elements__series[number];
            serie.style.background = series_colors[ elements__series[number]];
            set_current_matter()
            // normal_state = document.getElementById("normal_state").getElementsByClassName("magnitude")[0].innerHTML = current_matter_state;
            atomic_mass = document.getElementById("atomic_mass").getElementsByClassName("magnitude")[0].innerHTML = elements__atomic_masses[number];
            ratio = document.getElementById("ratio").getElementsByClassName("magnitude")[0].innerHTML = change_ratio()
            melting_point = document.getElementById("melting_point").getElementsByClassName("magnitude")[0].innerHTML = change_temperature( elements__melting_points[number], 0);
            boiling_point = document.getElementById("boiling_point").getElementsByClassName("magnitude")[0].innerHTML = change_temperature(elements__boiling_points[number],1);
            _hardness= document.getElementById("hardness").getElementsByClassName("magnitude")[0].innerHTML = change_hardness();
            
            electronic_affinity = document.getElementById("electronic_affinity").getElementsByClassName("magnitude")[0].innerHTML = change_electronics(elements__electronic_affinities[number],0);
            ionization_energy = document.getElementById("ionization_energy").getElementsByClassName("magnitude")[0].innerHTML = change_ionization(elements__ionization_energies[number],0);
            electronegativity = document.getElementById("electronegativity").getElementsByClassName("magnitude")[0].innerHTML = elements__electronegativities[number];
            density = document.getElementById("density").getElementsByClassName("magnitude")[0].innerHTML = change_density();
            conductivity = document.getElementById("conductivity").getElementsByClassName("magnitude")[0].innerHTML = elements__conductivities[number];
            specific_heat = document.getElementById("sensible_heat").getElementsByClassName("magnitude")[0].innerHTML = change_specific_heat();
            latent_heat = document.getElementById("latent_heat").getElementsByClassName("magnitude")[0].innerHTML = change_latent_heat();

            abundance = document.getElementById("abundance").getElementsByClassName("magnitude")[0].innerHTML = elements__abundances[number];
            oxidation_states = document.getElementById("oxidation_states").getElementsByClassName("magnitude")[0].innerHTML = elements__oxidation_states[number];
            // ELECTRONIC CONFIGURATION
            electronic_configuration_div = document.getElementById("electronic_configuration").getElementsByClassName("magnitude")[0];
            while (electronic_configuration_div .firstChild) { //Remove last (avoid duplicates)
                electronic_configuration_div .removeChild(electronic_configuration_div.firstChild);
            }
            electronic_configuration = elements__electronic_configurations[number];
            for (let i = 0; i < electronic_configuration.length; i++) { // Set the new electronic configuration
                let word =electronic_configuration[i];
                if (isNaN(word)){ //letter
                    _next = document.createElement("p");
                    _next.innerHTML = word;
                    _next.classList.add("el_config__base");
                }
                else{ //number
                    _next =document.createElement("div");
                    _next_inner = document.createElement("p")
                    _next_inner.innerHTML = word;
                    _next.appendChild(_next_inner)
                    if ((!(isNaN(electronic_configuration[i+1]))  ) || (electronic_configuration[i+1] ==undefined)){
                        _next.classList.add("el_config__super_linked");
                    }
                    else{
                        _next.classList.add("el_config__super");
                    }
                }
                electronic_configuration_div.appendChild(_next)
              }

            document.getElementById("valence").getElementsByClassName("magnitude")[0].innerHTML = valence;


            // Center information
            document.getElementById("block").children[1].innerHTML = elements__block[number];
            document.getElementById("electrons").children[1].innerHTML = number;
            document.getElementById("protons").children[1].innerHTML = number;
            document.getElementById("neutrons").children[1].innerHTML = Math.round(atomic_mass)-number;
            document.getElementById("cas_number").innerHTML = "CAS "+elements__cas[number];
            document.getElementById("discoverer").innerHTML = elements__discoverers[number];
            document.getElementById("year_discovered").innerHTML = elements__year_discovered[number];

            x = (window.innerWidth > 0) ? window.innerWidth : screen.width;
            y = window.innerHeight|| document.documentElement.clientHeight||  document.getElementsByTagName('body')[0].clientHeight;
            if(x<=2000){
                document.getElementsByClassName("element-info_section")[0]. className = "element-info_section mobile-selected";
                document.getElementsByClassName("aside_inner")[0].className = "aside_inner mobile-selected";
                document.getElementsByClassName("element-visualization_inner")[0].className = "element-visualization_inner mobile-selected";
                document.getElementsByClassName("element-visualization")[0].className = "element-visualization mobile-selected";
                document.getElementsByClassName("back-button_mobile")[0].className = "back-button_mobile mobile-selected";

                characteristics = document.getElementsByClassName("element-characteristic")
                for (characteristic in characteristics) {
                    document.getElementsByClassName("element-characteristic")[characteristic].classList.toggle("mobile-selected")
                }
            }
        })
    }
}, false);



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


// Responsive information <aside> (for mobiles)
document.getElementsByClassName("back-button_mobile_inner")[0].addEventListener('click', e=>{
    document.getElementsByClassName("element-info_section")[0].className = "element-info_section";
    document.getElementsByClassName("aside_inner")[0].className = "aside_inner";
    document.getElementsByClassName("element-visualization_inner")[0].className = "element-visualization_inner";
    document.getElementsByClassName("element-visualization")[0].className = "element-visualization";
    document.getElementsByClassName("back-button_mobile")[0].className = "back-button_mobile";
    characteristics = document.getElementsByClassName("element-characteristic")
    for (characteristic in characteristics) {
        document.getElementsByClassName("element-characteristic")[characteristic].className = "element-characteristic"
    }
})

