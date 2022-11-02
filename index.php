<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>


        <aside class="element-info_section">
            <div class="aside_inner">

                <div class="element-visualization_container">
                    <div class="back-button_mobile"> <p class="back-button_mobile_inner">< BACK</p></div>
                    <div class="element-visualization_inner">
                        <div class="element-visualization">
                            <div class="elementv-general">
                                <b class="atomic_number__visualization"></b>
                                <abbr class="symbol__visualization"></abbr>
                                <em></em>
                                <data></data>
                            </div>
                            <div class="elementv-energy-level">
                                <p id="first_level"></p>
                                <p id="second_level"></p>
                                <p id="third_level"></p>
                                <p id="fourth_level"></p>
                                <p id="fifth_level"></p>
                                <p id="sixth_level"></p>
                                <p id="seventh_level"></p>
    
                            </div>
                        </div>
                        <canvas id="atomic_model" width="300" height="300"></canvas>
                    </div>


                </div>
                <div class="element-characteristics">
                    <div class="element-characteristic" id="serie">
                        <!-- <div class="characteristic">Serie</div> -->
                        <div class="magnitude"></div>
                    </div>
                    <div class="characteristic-title" id="first_characteristic-title">
                        <p>IDENTIFICACION</p>
                    </div>
                    <div class="element-characteristic" id="normal_state">
                        <div class="characteristic">Estado</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                        </div>
                    </div>
                    <div class="element-characteristic" id="atomic_mass">
                        <div class="characteristic">Masa Atómica</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">u</div>
                        </div>
                    </div>
                    <div class="element-characteristic" id="density">
                        <div class="characteristic">Densidad</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">g/cm³</div>
                        </div>
                    </div>
                    <div class="element-characteristic" id="atomic_ratio">
                        <div class="characteristic">Radio Atómico</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">pm</div>
                        </div>
                    </div>

                    <div class="characteristic-title">
                        <p>PROPIEDADES FISICAS</p>
                    </div>
                    <div class="element-characteristic" id="melting_point">
                        <div class="characteristic">Punto de fusión</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <!-- <div class="unit" id="melting_point__unit">K</div> -->
                            <select class="temperature_select">
                                <option value="K">K</option>
                                <option value="C" selected>°C</option>
                                <option value="F">°F</option>
                            </select>
                        </div>
                    </div>
                    <div class="element-characteristic" id="boiling_point">
                        <div class="characteristic">Punto de ebullición</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <!-- <div class="unit"id="melting_point__unit">K</div> -->
                            <select class="temperature_select">
                                <option value="K">K</option>
                                <option value="C" selected>°C</option>
                                <option value="F">°F</option>
                            </select>
                        </div>
                    </div>
                    <div class="element-characteristic" id="specific_heat">
                        <div class="characteristic">Calor específico</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">J/kgK</div>
                        </div>
                    </div>

                    <div class="characteristic-title">
                        <p>PROPIEDADES ELECTRONICAS</p>
                    </div>
                    <div class="element-characteristic" id="electronegativity">
                        <div class="characteristic">Electronegatividad</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">(pauling)</div>
                        </div>
                    </div>
                    <div class="element-characteristic" id="electronic_affinity">
                        <div class="characteristic">Afinidad electrónica</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">eV</div>
                        </div>
                    </div>
                    <div class="element-characteristic" id="ionization_energy">
                        <div class="characteristic">Energía de ionización</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">eV</div>
                        </div>
                    </div>


                    <div class="element-characteristic" id="conductivity">
                        <div class="characteristic">Conductividad</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">MS/m</div>
                        </div>
                    </div>

                    <div class="characteristic-title">
                        <p>VALENCIA</p>
                    </div>
                    <div class="element-characteristic" id="valence"">
                        <div class="characteristic">Electrones de valencia</div>
                        <div class="magnitude"></div>
                    </div>
                    <div class="element-characteristic" id="oxidation_states">
                        <div class="characteristic">Estados de Oxidacion</div>
                        <div class="magnitude"></div>
                    </div>

                    <div class="characteristic-title">
                       <p>ELECTRONES</p>
                    </div>
                    <div class="element-characteristic" id="electronic_configuration">
                        <div class="characteristic">Configuración</div>
                        <div class="magnitude"></div>
                    </div>
                    <div class="element-characteristic" id="energy_levels">
                        <div class="characteristic">Niveles de energía</div>
                        <div class="magnitude"></div>
                    </div>

                    <div class="characteristic-title">
                        <p>ABUNDANCIA</p>
                    </div>
                    <div class="element-characteristic" id="abundance">
                        <div class="characteristic">Abundancia</div>
                        <div class="numeric_data">
                            <div class="magnitude"></div>
                            <div class="unit">%</div>
                        </div>
                    </div>
                    <!-- <div class="element-characteristic" id="cuantic_numbers">
                        <div class="characteristic">Números cuánticos</div>
                        <div class="magnitude"></div>
                    </div> -->
                </div>
            </div>

        </aside>



        <section id="periodictable_section">
            <div class="periodictable_inner">
                <table id="periodic_table">
                    <tr>
                        <th colspan="1"></th>
                        <th class="group-number">
                            1
                        </th>
                        <th class="group-number">
                            2
                        </th>
                        <th class="group-number">
                            3
                        </th>
                        <th class="group-number">
                            4
                        </th>
                        <th class="group-number">
                            5
                        </th>
                        <th class="group-number">
                            6
                        </th>
                        <th class="group-number">
                            7
                        </th>
                        <th class="group-number">
                            8
                        </th>
                        <th class="group-number">
                            9
                        </th>
                        <th class="group-number">
                            10
                        </th>
                        <th class="group-number">
                            11
                        </th>
                        <th class="group-number">
                            12
                        </th>
                        <th class="group-number">
                            13
                        </th>
                        <th class="group-number">
                            14
                        </th>
                        <th class="group-number">
                            15
                        </th>
                        <th class="group-number">
                            16
                        </th>
                        <th class="group-number">
                            17
                        </th>
                        <th class="group-number">
                            18
                        </th>
                    </tr>

                    <tr id="period1">
                        <th class="period-number">
                            1
                        </th>
                        <th class="ch_element non-metal" atomic_number="1">
                            <b>1</b>
                            <abbr>H</abbr>
                            <em style="letter-spacing: -0.0833333em;">Hidrógeno</em>
                            <data>1,008</data>
                        </th>
                        <th colspan="11"></th>
                        <th id="slider-temp">
                            <div id="slider-temp_container">
                                <label id="temp-label">Temperatura</label>
                                <div id="slider-temp_inner">
                                    <input type="button"  value="－" data-skip="-1">
                                    <input type="range" data-unit="C" min="-273" max="5727" value="0">
                                    <input type="button" value="＋" data-skip="+1">
                                    <input type="number" data-unit="C" id="Celsius" min="-273" max="5727" value="0"><label for="Celsius">°C</label>
                                </div>
                            </div>
                        </th>
                        <th colspan="3"></th>
                        <th>
                            <th class="ch_element noble-gas" atomic_number="2">
                                <b>2</b>
                                <abbr>He</abbr>
                                <em>Helio</em>
                                <data>4,0026</data>
                            </th>
                        </th>
                    </tr>
        
                    <tr id="period2">
                        <th class="period-number">
                            2
                        </th>
                        <th class="ch_element alkali" atomic_number="3" >
                            <b>3</b>
                            <abbr>Li</abbr>
                            <em>Litio</em>
                            <data>6,94</data>
                        </th>
                        <th class="ch_element alkaline-earth" atomic_number="4">
                            <b>4</b>
                            <abbr>Be</abbr>
                            <em>Berilio</em>
                            <data>9,0122</data>
                        </th>
                        <th colspan="10" id="element-information" >
                            <div id="element-information_container">
                                <div id="element-information_inner">
                                    <div class="element_information_name">
                                        <b class="atomic_number__visualization"></b>
                                        <abbr class="symbol__visualization"></abbr>
                                        <p id="element_name"></p>
                                        <p id="cas_number">CAS</p>
                                    </div>
                                    <div class="element_information">
                                        <div class="description_container">
                                            <p class="characteristic">Descubrimiento:</p>
                                            <div class="discovery-info">
                                                <p id="year_discovered"></p>
                                                <p id="discoverer"></p>
                                            </div>
                                            <!-- <p id="text_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nemo.</p> -->
    
                                        </div>
                                        <div class="identification_container">
                                            <!-- <div id="group">
                                                <p class="characteristic">Grupo:</p>
                                                <p >2</p>
                                            </div>
                                            <div id="period">
                                                <p class="characteristic">Periodo:</p>
                                                <p >2</p>
                                            </div> -->
                                            <div id="block">
                                                <p class="characteristic">Bloque:</p>
                                                <p >2</p>
                                            </div>
                                            <div id="electrons">
                                                <p class="characteristic">Electrones:</p>
                                                <p >2</p>
                                            </div>
                                            <div id="protons">
                                                <p class="characteristic">Protones:</p>
                                                <p >2</p>
                                            </div>
                                            <div id="neutrons">
                                                <p class="characteristic">Neutrones:</p>
                                                <p >2</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>                                
                            </div>
                        </th>

                        <th class="ch_element semi-metal" atomic_number="5">
                            <b>5</b>
                            <abbr>B</abbr>
                            <em>Boro</em>
                            <data>10,81</data>
                        </th>
                        <th class="ch_element non-metal" atomic_number="6">
                            <b>6</b>
                            <abbr>C</abbr>
                            <em>Carbono</em>
                            <data>12,011</data>
                        </th>
                        <th class="ch_element non-metal" atomic_number="7">
                            <b>7</b>
                            <abbr>N</abbr>
                            <em>Nitrógeno</em>
                            <data>14,007</data>
                        </th>
                        <th class="ch_element non-metal" atomic_number="8">
                            <b>8</b>
                            <abbr>O</abbr>
                            <em>Oxígeno</em>
                            <data>15,999</data>
                        </th>
                        <th class="ch_element halogen" atomic_number="9">
                            <b>9</b>
                            <abbr>F</abbr>
                            <em>Flúor</em>
                            <data>18,998</data>
                        </th>
                        <th class="ch_element noble-gas" atomic_number="10">
                            <b>10</b>
                            <abbr>Ne</abbr>
                            <em>Neón</em>
                            <data>20,180</data>
                        </th>
                    </tr>

                    <tr id="period3">
                        <th class="period-number">
                            3
                        </th>
                        <th class="ch_element alkali" atomic_number="11">
                            <b>11</b>
                            <abbr>Na</abbr>
                            <em>Sodio</em>
                            <data>22,990</data>
                        </th>
                        <th class="ch_element alkaline-earth" atomic_number="12">
                            <b>12</b>
                            <abbr>Mg</abbr>
                            <em>Magnesio</em>
                            <data>24,305</data>
                        </th>
                        <th colspan="10"></th>
                        <th class="ch_element post-transition" atomic_number="13">
                            <b>13</b>
                            <abbr>Al</abbr>
                            <em>Aluminio</em>
                            <data>26,982</data>
                        </th>
                        <th class="ch_element semi-metal" atomic_number="14">
                            <b>14</b>
                            <abbr>Si</abbr>
                            <em>Silicio</em>
                            <data>28,085</data>
                        </th>
                        <th class="ch_element non-metal" atomic_number="15">
                            <b>15</b>
                            <abbr>P</abbr>
                            <em>Fósforo</em>
                            <data>30,974</data>
                        </th>
                        <th class="ch_element non-metal" atomic_number="16">
                            <b>16</b>
                            <abbr>S</abbr>
                            <em>Azufre</em>
                            <data>32,06</data>
                        </th>
                        <th class="ch_element halogen" atomic_number="17">
                            <b>17</b>
                            <abbr>Cl</abbr>
                            <em>Cloro</em>
                            <data>35,45</data>
                        </th>
                        <th class="ch_element noble-gas" atomic_number="18">
                            <b>18</b>
                            <abbr>Ar</abbr>
                            <em>Argón</em>
                            <data>39,948</data>
                        </th>
                    </tr>

                    <tr id="period4">
                        <th class="period-number">
                            4
                        </th>
                        <th class="ch_element alkali" atomic_number="19">
                            <b>19</b>
                            <abbr>K</abbr>
                            <em>Potasio</em>
                            <data>39,098</data>
                        </th>
                        <th class="ch_element alkaline-earth" atomic_number="20">
                            <b>20</b>
                            <abbr>Ca</abbr>
                            <em>Calcio</em>
                            <data>40,078</data>
                        </th>
                        <th class="ch_element metal" atomic_number="21">
                            <b>21</b>
                            <abbr>Sc</abbr>
                            <em>Escandio</em>
                            <data>44,956</data>
                        </th>
                        <th class="ch_element metal" atomic_number="22">
                            <b>22</b>
                            <abbr>Ti</abbr>
                            <em>Titanio</em>
                            <data>47,867</data>
                        </th>
                        <th class="ch_element metal" atomic_number="23">
                            <b>23</b>
                            <abbr>V</abbr>
                            <em>Vanadio</em>
                            <data>50,942</data>
                        </th>
                        <th class="ch_element metal" atomic_number="24">
                            <b>24</b>
                            <abbr>Cr</abbr>
                            <em>Cromo</em>
                            <data>51,996</data>
                        </th>
                        <th class="ch_element metal" atomic_number="25">
                            <b>25</b>
                            <abbr>Mn</abbr>
                            <em style="letter-spacing: -0.0833333em;">Manganeso</em>
                            <data>54,938</data>
                        </th>
                        <th class="ch_element metal" atomic_number="26">
                            <b>26</b>
                            <abbr>Fe</abbr>
                            <em>Hierro</em>
                            <data>55,845</data>
                        </th>
                        <th class="ch_element metal" atomic_number="27">
                            <b>27</b>
                            <abbr>Co</abbr>
                            <em>Cobalto</em>
                            <data>58,933</data>
                        </th>
                        <th class="ch_element metal" atomic_number="28">
                            <b>28</b>
                            <abbr>Ni</abbr>
                            <em>Níquel</em>
                            <data>58,693</data>
                        </th>
                        <th class="ch_element metal" atomic_number="29">
                            <b>29</b>
                            <abbr>Cu</abbr>
                            <em>Cobre</em>
                            <data>63,546</data>
                        </th>
                        <th class="ch_element metal" atomic_number="30">
                            <b>30</b>
                            <abbr>Zn</abbr>
                            <em>Zinc</em>
                            <data>65,38</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="31">
                            <b>31</b>
                            <abbr>Ga</abbr>
                            <em>Galio</em>
                            <data>69,723</data>
                        </th>
                        <th class="ch_element semi-metal" atomic_number="32">
                            <b>32</b>
                            <abbr>Ge</abbr>
                            <em>Germanio</em>
                            <data>72,630</data>
                        </th>
                        <th class="ch_element semi-metal" atomic_number="33">
                            <b>33</b>
                            <abbr>As</abbr>
                            <em>Arsénico</em>
                            <data>74,922</data>
                        </th>
                        <th class="ch_element non-metal" atomic_number="34">
                            <b>34</b>
                            <abbr>Se</abbr>
                            <em>Selenio</em>
                            <data>78,971</data>
                        </th>
                        <th class="ch_element halogen" atomic_number="35">
                            <b>35</b>
                            <abbr>Br</abbr>
                            <em>Bromo</em>
                            <data>79,904</data>
                        </th>
                        <th class="ch_element noble-gas" atomic_number="36">
                            <b>36</b>
                            <abbr>Kr</abbr>
                            <em>Kriptón</em>
                            <data>83,798</data>
                        </th>
                    </tr>

                    <tr id="period5">
                        <th class="period-number">
                            5
                        </th>
                        <th class="ch_element alkali" atomic_number="37">
                            <b>37</b>
                            <abbr>Rb</abbr>
                            <em>Rubidio</em>
                            <data>85,468</data>
                        </th>
                        <th class="ch_element alkaline-earth" atomic_number="38">
                            <b>38</b>
                            <abbr>Sr</abbr>
                            <em>Estroncio</em>
                            <data>87,62</data>
                        </th>
                        <th class="ch_element metal" atomic_number="39">
                            <b>39</b>
                            <abbr>Y</abbr>
                            <em>Itrio</em>
                            <data>88,906</data>
                        </th>
                        <th class="ch_element metal" atomic_number="40">
                            <b>40</b>
                            <abbr>Zr</abbr>
                            <em>Circonio</em>
                            <data>91,224</data>
                        </th>
                        <th class="ch_element metal" atomic_number="41">
                            <b>41</b>
                            <abbr>Nb</abbr>
                            <em>Niobio</em>
                            <data>92,906</data>
                        </th>
                        <th class="ch_element metal" atomic_number="42">
                            <b>42</b>
                            <abbr>Mo</abbr>
                            <em style="letter-spacing: -0.0833333em;">Molibdeno</em>
                            <data>95,95</data>
                        </th>
                        <th class="ch_element metal" atomic_number="43">
                            <b>43</b>
                            <abbr>Tc</abbr>
                            <em>Tecnecio</em>
                            <data>(98)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="44">
                            <b>44</b>
                            <abbr>Ru</abbr>
                            <em>Rutenio</em>
                            <data>101,07</data>
                        </th>
                        <th class="ch_element metal" atomic_number="45">
                            <b>45</b>
                            <abbr>Rh</abbr>
                            <em>Rodio</em>
                            <data>102,91</data>
                        </th>
                        <th class="ch_element metal" atomic_number="46">
                            <b>46</b>
                            <abbr>Pd</abbr>
                            <em>Paladio</em>
                            <data>106,42</data>
                        </th>
                        <th class="ch_element metal" atomic_number="47">
                            <b>47</b>
                            <abbr>Ag</abbr>
                            <em>Plata</em>
                            <data>107,87</data>
                        </th>
                        <th class="ch_element metal" atomic_number="48">
                            <b>48</b>
                            <abbr>Cd</abbr>
                            <em>Cadmio</em>
                            <data>112,41</data>
                        </li>
                        </th>
                        <th class="ch_element post-transition" atomic_number="49">
                            <b>49</b>
                            <abbr>In</abbr>
                            <em>Indio</em>
                            <data>114,82</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="50">
                            <b>50</b>
                            <abbr>Sn</abbr>
                            <em>Estaño</em>
                            <data>118,71</data>
                        </th>
                        <th class="ch_element semi-metal" atomic_number="51">
                            <b>51</b>
                            <abbr>Sb</abbr>
                            <em style="letter-spacing: -0.0277778em;">Antimonio</em>
                            <data>121,76</data>
                        </th>
                        <th class="ch_element semi-metal    " atomic_number="52">
                            <b>52</b>
                            <abbr>Te</abbr>
                            <em>Telurio</em>
                            <data>127,60</data>
                        </th>
                        <th class="ch_element halogen" atomic_number="53">
                            <b>53</b>
                            <abbr>I</abbr>
                            <em>Yodo</em>
                            <data>126,90</data>
                        </th>
                        <th class="ch_element noble-gas" atomic_number="54">
                            <b>54</b>
                            <abbr>Xe</abbr>
                            <em>Xenón</em>
                            <data>131,29</data>
                        </th>
                    </tr>

                    <tr id="period6">
                        <th class="period-number">
                            6
                        </th>
                        <th class="ch_element alkali" atomic_number="55">
                            <b>55</b>
                            <abbr>Cs</abbr>
                            <em>Cesio</em>
                            <data>132,91</data>
                        </th>
                        <th class="ch_element alkaline-earth" atomic_number="56">
                            <b>56</b>
                            <abbr>Ba</abbr>
                            <em>Bario</em>
                            <data>137,33</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="57">

                        </th>
                        <th class="ch_element metal" atomic_number="72">
                            <b>72</b>
                            <abbr>Hf</abbr>
                            <em>Hafnio</em>
                            <data>178,49</data>
                        </th>
                        <th class="ch_element metal" atomic_number="73">
                            <b>73</b>
                            <abbr>Ta</abbr>
                            <em>Tántalo</em>
                            <data>180,95</data>
                        </th>
                        <th class="ch_element metal" atomic_number="74">
                        <b>74</b>
                        <abbr>W</abbr>
                        <em>Wolframio</em>
                        <data>183,84</data>
                        </th>
                        <th class="ch_element metal" atomic_number="75">
                            <b>75</b>
                            <abbr>Re</abbr>
                            <em>Renio</em>
                            <data>186,21</data>
                        </th>
                        <th class="ch_element metal" atomic_number="76">
                            <b>76</b>
                            <abbr>Os</abbr>
                            <em>Osmio</em>
                            <data>190,23</data>
                        </th>
                        <th class="ch_element metal" atomic_number="77">
                            <b>77</b>
                            <abbr>Ir</abbr>
                            <em>Iridio</em>
                            <data>192,22</data>
                        </th>
                        <th class="ch_element metal" atomic_number="78">
                        <b>78</b>
                        <abbr>Pt</abbr>
                        <em>Platino</em>
                        <data>195,08</data>
                        </th>
                        <th class="ch_element metal" atomic_number="79">
                            <b>79</b>
                            <abbr>Au</abbr>
                            <em>Oro</em>
                            <data>196,97</data>
                        </th>
                        <th class="ch_element metal" atomic_number="80">
                            <b>80</b>
                            <abbr>Hg</abbr>
                            <em>Mercurio</em>
                            <data>200,59</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="81">
                            <b>81</b>
                            <abbr>Tl</abbr>
                            <em>Talio</em>
                            <data>204,38</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="82">
                            <b>82</b>
                            <abbr>Pb</abbr>
                            <em>Plomo</em>
                            <data>207,2</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="83">
                            <b>83</b>
                            <abbr>Bi</abbr>
                            <em>Bismuto</em>
                            <data>208,98</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="84">
                            <b>84</b>
                            <abbr>Po</abbr>
                            <em>Polonio</em>
                            <data>(209)</data>
                        </th>
                        <th class="ch_element halogen" atomic_number="85">
                            <b>85</b>
                            <abbr>At</abbr>
                            <em>Ástato</em>
                            <data>(210)</data>
                        </th>
                        <th class="ch_element noble-gas" atomic_number="86">
                            <b>86</b>
                            <abbr>Rn</abbr>
                            <em>Radón</em>
                            <data>(222)</data>
                        </th>
                    </tr>

                    <tr id="period7">
                        <th class="period-number">
                            7
                        </th>
                        <th class="ch_element alkali" atomic_number="87">
                            <b>87</b>
                            <abbr>Fr</abbr>
                            <em>Francio</em>
                            <data>(223)</data>
                        </th>
                        <th class="ch_element alkaline-earth" atomic_number="88">
                            <b>88</b>
                            <abbr>Ra</abbr>
                            <em>Radio</em>
                            <data>(226)</data>
                        </th>
                        <th class="ch_element actinide">

                        </th>
                        <th class="ch_element metal" atomic_number="104">
                            <b>104</b>
                            <abbr>Rf</abbr>
                            <em style="letter-spacing: -0.0833333em; transform: translateX(-0.18315%) scaleX(0.996337);">Rutherfordio</em>
                            <data>(267)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="105">
                            <b>105</b>
                            <abbr>Db</abbr>
                            <em>Dubnio</em>
                            <data>(268)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="106">
                            <b>106</b>
                            <abbr>Sg</abbr>
                            <em>Seaborgio</em>
                            <data>(269)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="107">
                            <b>107</b>
                            <abbr>Bh</abbr>
                            <em>Bohrio</em>
                            <data>(270)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="108">
                            <b>108</b>
                            <abbr>Hs</abbr>
                            <em>Hasio</em>
                            <data>(277)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="109">
                            <b>109</b>
                            <abbr>Mt</abbr>
                            <em>Meitnerio</em>
                            <data>(278)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="110">
                            <b>110</b>
                            <abbr>Ds</abbr>
                            <em style="letter-spacing: -0.0833333em;">Darmstatio</em>
                            <data>(281)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="111">
                            <b>111</b>
                            <abbr>Rg</abbr>
                            <em style="letter-spacing: -0.0833333em;">Roentgenio</em>
                            <data>(282)</data>
                        </th>
                        <th class="ch_element metal" atomic_number="112">
                            <b>112</b>
                            <abbr>Cn</abbr>
                            <em style="letter-spacing: -0.0833333em;">Copernicio</em>
                            <data>(285)</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="113">
                            <b>113</b>
                            <abbr>Nh</abbr>
                            <em>Nihonio</em>
                            <data>(286)</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="114">
                            <b>114</b>
                            <abbr>Fl</abbr>
                            <em>Flerovio</em>
                            <data>(289)</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="115">
                            <b>115</b>
                            <abbr>Mc</abbr>
                            <em>Moscovio</em>
                            <data>(290)</data>
                        </th>
                        <th class="ch_element post-transition" atomic_number="116">
                            <b>116</b>
                            <abbr>Lv</abbr>
                            <em style="letter-spacing: -0.05em;">Livermorio</em>
                            <data>(293)</data>
                        </th>
                        <th class="ch_element halogen" atomic_number="117">
                            <b>117</b>
                            <abbr>Ts</abbr>
                            <em>Teneso</em>
                            <data>(294)</data>
                        </th>
                        <th class="ch_element noble-gas" atomic_number="118">
                            <b>118</b>
                            <abbr>Og</abbr>
                            <em>Oganesón</em>
                            <data>(294)</data>
                        </th>
                    </tr>

                    <tr id="rare-earths_gap"> </tr>
                    
                    <tr id="lanthanides">
                        <th colspan="3"></th>
                        <th class="ch_element lanthanide" atomic_number="57">
                            <b>57</b>
                            <abbr>La</abbr>
                            <em>Lantano</em>
                            <data>138,91</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="58">
                            <b>58</b>
                            <abbr>Ce</abbr>
                            <em>Cerio</em>
                            <data>140,12</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="59">
                            <b>59</b>
                            <abbr>Pr</abbr>
                            <em style="letter-spacing: -0.0833333em;">Praseodimio</em>
                            <data>140,91</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="60">
                            <b>60</b>
                            <abbr>Nd</abbr>
                            <em>Neodimio</em>
                            <data>144,24</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="61">
                            <b>61</b>
                            <abbr>Pm</abbr>
                            <em>Prometio</em>
                            <data>(145)</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="62">
                            <b>62</b>
                            <abbr>Sm</abbr>
                            <em>Samario</em>
                            <data>150,36</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="63">
                            <b>63</b>
                            <abbr>Eu</abbr>
                            <em>Europio</em>
                            <data>151,96</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="64">
                            <b>64</b>
                            <abbr>Gd</abbr>
                            <em>Gadolinio</em>
                            <data>157,25</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="65">
                            <b>65</b>
                            <abbr>Tb</abbr>
                            <em>Terbio</em>
                            <data>158,93</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="66">
                            <b>66</b>
                            <abbr>Dy</abbr>
                            <em>Disprosio</em>
                            <data>162,50</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="67">
                            <b>67</b>
                            <abbr>Ho</abbr>
                            <em>Holmio</em>
                            <data>164,93</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="68">
                            <b>68</b>
                            <abbr>Er</abbr>
                            <em>Erbio</em>
                            <data>167,26</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="69">
                            <b>69</b>
                            <abbr>Tm</abbr>
                            <em>Tulio</em>
                            <data>168,93</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="70">
                            <b>70</b>
                            <abbr>Yb</abbr>
                            <em>Iterbio</em>
                            <data>173,05</data>
                        </th>
                        <th class="ch_element lanthanide" atomic_number="71">
                            <b>71</b>
                            <abbr>Lu</abbr>
                            <em>Lutecio</em>
                            <data>174,97</data>
                        </th>
                    </tr>
                    
                    
                    <tr id="actinides">
                        <th colspan="3"></th>
                        <th class="ch_element actinide" atomic_number="89">
                            <b>89</b>
                            <abbr>Ac</abbr>
                            <em>Actinio</em>
                            <data>(227)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="90">
                            <b>90</b>
                            <abbr>Th</abbr>
                            <em>Torio</em>
                            <data>232,04</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="91">
                            <b>91</b>
                            <abbr>Pa</abbr>
                            <em style="letter-spacing: -0.0833333em;">Protactinio</em>
                            <data>231,04</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="92">
                            <b>92</b>
                            <abbr>U</abbr>
                            <em>Uranio</em>
                            <data>238,03</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="93">
                            <b>93</b>
                            <abbr>Np</abbr>
                            <em>Neptunio</em>
                            <data>(237)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="94">
                            <b>94</b>
                            <abbr>Pu</abbr>
                            <em>Plutonio</em>
                            <data>(244)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="95">
                            <b>95</b>
                            <abbr>Am</abbr>
                            <em>Americio</em>
                            <data>(243)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="96">
                            <b>96</b>
                            <abbr>Cm</abbr>
                            <em>Curio</em>
                            <data>(247)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="97">
                            <b>97</b>
                            <abbr>Bk</abbr>
                            <em>Berkelio</em>
                            <data>(247)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="98">
                            <b>98</b>
                            <abbr>Cf</abbr>
                            <em>Californio</em>
                            <data>(251)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="99">
                            <b>99</b>
                            <abbr>Es</abbr>
                            <em>Einstenio</em>
                            <data>(252)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="100">
                            <b>100</b>
                            <abbr>Fm</abbr>
                            <em>Fermio</em>
                            <data>(257)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="101">
                            <b>101</b>
                            <abbr>Md</abbr>
                            <em style="letter-spacing: -0.0833333em;">Mendelevio</em>
                            <data>(258)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="102">
                            <b>102</b>
                            <abbr>No</abbr>
                            <em>Nobelio</em>
                            <data>(259)</data>
                        </th>
                        <th class="ch_element actinide" atomic_number="103">
                            <b>103</b>
                            <abbr>Lr</abbr>
                            <em>Lawrencio</em>
                            <data>(266)</data>
                        </th>
                    </tr>

                </table>

            </div>
        </section>

    </main>
    <!-- <footer>
        <div class="footer_inner">
            <div class="korol">
                <h1><span class="logo">Korol TABLE -</span><span id="by-korol"> By Korol Systems<span id="we-are"> WE ARE KOROL</span></h1>
            </div>
        </div>

    </footer> -->
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>
    <script src="script.js"></script>
    <script src="atomic_model.js"></script>
</html>