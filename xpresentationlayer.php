<?php

session_start();

/*==========================================================================  
     Class: xpresentationLayer
     Description: MVC View. Italviajes Helper Methods
     Version: 1.0
     Remarks:
     ========================================================================*/

class xpresentationLayer
{

    /*=======================================================================
    Function: startHtml
    Description: HTML TAG START according to language "lang"
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    static function startHtml($lang)
    {
        echo '<!DOCTYPE html>';
        echo '<HTML lang="' . $lang . '">';
    } // startHtml

    /*=======================================================================
    Function: endHtml
    Description: HTML TAG END and add the file .js
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    static function endHtml()
    {
        echo '</HTML>';
        echo '<SCRIPT src="./js/jquery-3.6.0.min.js" type="text/javascript"></SCRIPT>';
        // echo '<SCRIPT src="./js/popper.min.js" type="text/javascript"></SCRIPT>';
        // echo '<SCRIPT src="./js/bootstrap.js" type="text/javascript"></SCRIPT>';
        // echo '<SCRIPT src="./js/bootstrap.bundle.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/main.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/jquery-3.6.0.min.js"></SCRIPT>';
        echo '<SCRIPT type="text/javascript" src="DataTables/datatables.min.js"></SCRIPT>';
        echo '<SCRIPT>';
        echo '    $(document).ready(function () {';
        echo '        $("#example").DataTable();';
        echo '    });';
        echo '</SCRIPT>';
    } // endHtml

    /*=======================================================================
    Function: buildHead
    Description: HTML Head, rendering "title"
    Parameters: $title <-- name of App
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function buildHead($title, $classBody="")
    {
        if ($classBody != "") {
            $classBody = 'class="'.$classBody.'"';
        }

        echo  '<HEAD>';
        echo  ' <TITLE>' . $title . '</TITLE> ';
        echo  ' <META charset="UTF-8"> ';
        echo  ' <META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> ';
        echo  ' <LINK rel="stylesheet" href="./css/style.css">';
        echo  ' <LINK rel="stylesheet" href="./css/options.css">';
        echo  ' <LINK rel="stylesheet" href="./css/inputs.css">';
        echo  ' <LINK rel="stylesheet" href="./css/checkbox.css">';
        echo  ' <LINK rel="stylesheet" href="./css/button.css">';
        echo  ' <LINK rel="stylesheet" href="./css/helpers.css">';
        echo  ' <LINK rel="stylesheet" href="./css/titles.css">';
        echo  ' <LINK rel="stylesheet" href="./css/modal.css">';
        echo  ' <LINK rel="stylesheet" href="./css/bootstrap.min.css">';
        echo  ' <LINK rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />';
        echo  ' <LINK rel="stylesheet" href="./css/tablesCustomYg.css">';
        // echo  ' <LINK href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
        echo  ' </HEAD> ';
        echo  ' <BODY '.$classBody.'> ';
    } //buildHead

    /*=======================================================================
    Function: endBody
    Description: HTML Head, rendering "title"
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endBody()
    {
        echo  ' </BODY> ';
    } //endBody

    /*=======================================================================
    Function: startMain
    Description: HTML Head, rendering "title"
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startMain()
    {
        echo  '<MAIN>';
    } //startMain

    /*=======================================================================
    Function: endMain
    Description: HTML Head, rendering "title"
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endMain()
    {
        echo  '</MAIN>';
    } //endMain
    
    /*=======================================================================
    Function: startForm
    Description: start the form of menu 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startForm($id = "", $action = "", $class = "")
    {
        if ($action != "") {
            $action = 'action="' . $action . '"';
        }
        if ($class != "") {
            $class = 'class="' . $class . '"';
        }
        if ($id != "") {
            $id = 'id="' . $id . '"';
        }

            echo '<DIV class="container wrapper mt20">';
            echo '  <FORM ' . $id . $action . $class . '>';
    } //startForm
    
    /*=======================================================================
    Function: endFormManu
    Description: end the form of menu 
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endForm()
    {
        echo '  </FORM>';
        echo '</DIV>';
    } //endFormManu
    
    /*=======================================================================
    Function: startDiv
    Description: start div 
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startDiv($class = "")
    {
        if ($class != "") {
            $class = 'class="' . $class . '"';
        }

        echo '<DIV '.$class.'>';
    } //startDiv
    
    /*=======================================================================
    Function: endDiv
    Description: end div tag
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endDiv()
    {
        echo '</DIV>';
    } //endDiv
    
    /*=======================================================================
    Function: buildInputRadio
    Description: build a check component
    Parameters: $title <-- Title of label
                $idInput <-- Id of the input
                $nameInput <-- Name of the checks
                Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildInputRadio($title, $nameInput, $idInput)
    {
        echo '<DIV>';
        echo '    <LABEL class="mr20">';
        echo '        <INPUT class="option-input radio" id="'.$idInput.'" name="'.$nameInput.'" type="radio" />';
        echo '        <SPAN>'.$title.'</SPAN>';
        echo '    </LABEL>';
        echo '</DIV>';
    } //buildInputRadio
    
    /*=======================================================================
    Function: startContainerInputs
    Description: start the container inputs
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startContainerInputs()
    {
            echo '<DIV class="displayf">';
            echo '  <DIV class="container-inputs">';
    } //startContainerInputs
    
    /*=======================================================================
    Function: endContainerInputs
    Description: end div double tag
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function endContainerInputs()
    {
        echo '  </DIV>';
        echo '</DIV>';
    } //endContainerInputs
    
    /*=======================================================================
    Function: buildInputWithIcon
    Description: build a check component
    Parameters: $title <-- Title of label
                $idInput <-- Id of the input
                $nameInput <-- Name of the checks
                Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildInputWithIcon($title, $typeInput, $nameInput, $idInput, $nameImage, $placeholder = "", $readOnly = "", $disabled ="")
    {
        if ($readOnly != "") {
            $readOnly = 'readOnly';
        }
        if ($disabled != "") {
            $disabled = 'disabled';
        }

        echo '<DIV class="webflow-style-input">';
        echo '    <LABEL for="" class="title-Input">'.$title.'</LABEL>';
        echo '    <INPUT class="input-icon" type="'.$typeInput.'" placeholder="'.$placeholder.'" name="'.$nameInput.'"  id="'.$idInput.'" '.$readOnly.' '.$disabled.'></INPUT>';
        echo '    <BUTTON type="submit" class="btn-icon" disabled>';
        echo '        <I class="ion-android-arrow-forward material-icons prefix"><IMG src="./img/'.$nameImage.'"></I>';
        echo '    </BUTTON>';
        echo '</DIV>';
    } //buildInputWithIcon

    
    /*=======================================================================
    Function: buildChecks
    Description: build a check component
    Parameters: $title <-- Title of label
    $idInput <-- Id of the input
    $nameInput <-- Name of the checks
    Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildInput($title, $typeInput, $nameInput, $idInput, $placeholder = "", $readOnly = "", $disabled ="")
    {
        if ($readOnly != "") {
            $readOnly = 'readOnly';
        }
        if ($disabled != "") {
            $disabled = 'disabled';
        }
        echo '<DIV class="webflow-style-input">';
        echo '    <LABEL for="" class="title-Input">'.$title.'</LABEL>';
        echo '    <INPUT class="input-icon icon-absolute" type="'.$typeInput.'" placeholder="'.$placeholder.'" name="'.$nameInput.'"  id="'.$idInput.'" '.$readOnly.' '.$disabled.'></INPUT>';
        echo '</DIV>';
    } //buildChecks
    
    /*=======================================================================
    Function: buildCheckBox
    Description: build a check component
    Parameters: $title <-- Title of label
                $idInput <-- Id of the input
                $nameInput <-- Name of the checks
                Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildCheckBox($title, $nameInput, $idInput, $disabled ="")
    {
        if ($disabled != "") {
            $disabled = 'disabled';
        }

        echo '<DIV class="width-25percent">';
        echo '    <INPUT type="checkbox" id="'.$idInput.'" name="'.$nameInput.'" '.$disabled.'/>';
        echo '    <LABEL for="'.$idInput.'">'.$title.'</LABEL>';
        echo '</DIV>';
    } //buildCheckBox
    
    /*=======================================================================
    Function: buildGrid
    Description: build a check component
    Parameters: $title <-- Title of label
    $idInput <-- Id of the input
    $nameInput <-- Name of the checks
    Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildGrid()
    {
        echo '<div class="container border-table mt20">';
        echo '    <table id="example" class="customTableYg">';
        echo '        <thead>';
        echo '            <tr>';
        echo '                <th>Name</th>';
        echo '                <th>Position</th>';
        echo '                <th>Office</th>';
        echo '                <th>Age</th>';
        echo '                <th class="text-center">Start date</th>';
        echo '            </tr>';
        echo '        </thead>';
        echo '        <tbody>';
        echo '            <tr>';
        echo '                <td class="text-center">';
        echo '                    <input type="checkbox" id="ave" />';
        echo '                    <label for="ave"></label>';
        echo '                </td>';
        echo '                <td class="customTableYg__info">';
        echo '                    <div>';
        echo '                        <img src="./img/airline.jpg" alt="agencia de viajes">';
        echo '                    </div>';
        echo '                    <div class="customTableYg__info__2">';
        echo '                        <p class="customTableYg__schedule">14:00 16:14</p>';
        echo '                        <h3 class="customTableYg__destination">MIA Miami - SDQ Aeropuerto</h3>';
        echo '                    </div>';
        echo '                </td>';
        echo '                <td class="customTableYg__type">';
        echo '                    Directo';
        echo '                </td>';
        echo '                <td class="customTableYg__time">61</td>';
        echo '                <td class="text-center">';
        echo '                    <h3 class="customTableYg__price">';
        echo '                        $304';
        echo '                        <small>';
        echo '                            $1.215 en total';
        echo '                        </small>';
        echo '                    </h3>';
        echo '                    <button class="btnCustom btnCustom-table">';
        echo '                        Seleccionar';
        echo '                    </button>';
        echo '                </td>';
        echo '            </tr>';
        echo '        </tbody>';
        echo '    </table>';
        echo '</div>';
    } //buildGrid
    
    /*=======================================================================
    Function: buildMenu
    Description: build a check component
    Parameters: $title <-- Title of label
    $idInput <-- Id of the input
    $nameInput <-- Name of the checks
    Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildMenu()
    {
        echo '<header class="menu-b" data-spy="affix" data-offset-top="0" style="background-color: rgba(0, 0, 0, .5);">';
        echo '  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">';
        echo '      <div class="container-fluid">';
        echo '          <div class="">';
        echo '              <a class="" href="#"><img src="./img/LogoItalpromotion.jpg" alt="" srcset="" class="w50p"></a>';
        echo '          </div>';
        echo '          <div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo '              <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
        echo '                  <li class="nav-item">';
        echo '                      <a class="nav-link active" aria-current="page" href="#">Home</a>';
        echo '                  </li>';
        echo '                  <li class="nav-item">';
        echo '                      <a class="nav-link" href="#">Link</a>';
        echo '                  </li>';
        echo '                  <li class="nav-item dropdown">';
        echo '                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
        echo '                          Dropdown';
        echo '                      </a>';
        echo '                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
        echo '                          <li><a class="dropdown-item" href="#">Action</a></li>';
        echo '                          <li><a class="dropdown-item" href="#">Another action</a></li>';
        echo '                          <li>';
        echo '                              <hr class="dropdown-divider">';
        echo '                          </li>';
        echo '                          <li><a class="dropdown-item" href="#">Something else here</a></li>';
        echo '                      </ul>';
        echo '                  </li>';
        echo '                  <li class="nav-item">';
        echo '                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>';
        echo '                  </li>';
        echo '              </ul>';
        echo '              <form class="d-flex">';
        echo '                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">';
        echo '                  <button class="btn btn-outline-success" type="submit">Search</button>';
        echo '              </form>';
        echo '          </div>';
        echo '      </div>';
        echo '  </nav>';
        echo '</header>';
    } //buildMenu
    
    /*=======================================================================
    Function: buildOptionGrid
    Description: Build options in the first section with a limit of 3 and set the $title name
    Parameters: $title <-- Name Option
    $data_id <-- Para relacionar con las opciones de buildOptionsPrincipal
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    
    static function buildButton($title, $idButton)
    {
        echo '<BUTTON class="btnCustom btnCustom-table" id="' . $idButton . '" >';
        echo $title;
        echo '</BUTTON>';
    } //buildButton
    
    /*=======================================================================
    Function: buildSelectJson
    Description: Build Select with Jason 
    Parameters: $title <-- Contiene el titulo del objeto		
    $name <-- Contiele el nombre del objeto html
    $id  <-- Contiele el id del objeto html
    $json <-- Contiele los datos en formato json				
    $showCol <-- Valor de la columna a mostrar de la BD
    $event <--
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildSelectJson($title, $name, $id, $json, $event = "", $classContainer = "", $required = false, $idContainer = "")
    {
        $data = $json->list;
        
        if ($event != "") {
            $event = 'onchange="' . $event . '"';
        }
        if ($id != "") {
            $id = 'id="' . $id . '"';
        }
        if ($idContainer != "") {
            $idContainer = 'id="' . $idContainer . '"';
        }
        if ($required) {
            $required  = 'required';
        }
        
        echo '<DIV class="input-field1 ' . $classContainer . '" ' . $idContainer . '>';
        echo '    <LABEL class="font-Bold">' . $title . '</LABEL>';
        
        echo '<SELECT name="' . $name . '" ' . $id . $event . $required . '>';
        echo '<OPTION disabled selected>Seleccione</OPTION>';
        foreach ($data as $value) {
            echo '<OPTION value="' . $value->code . '">' . $value->name . ' </OPTION>';
            echo '<OPTION value="' . $value->code . '">' . $value->code . ' </OPTION>';
        }
        echo '</SELECT>';
        echo '</DIV>';
    } //buildSelectJson
    
    /*=======================================================================
    Function: buildCardsNotice
    Description: build a check component
    Parameters: $titleNotice <-- title of notice
                $textNotice <-- Information
                $classContainer <-- for add class css
                $routeImage <-- route of img of notice
                Algorithm: 
    Remarks:
    Standarized: 2021-05-26 11:40
    ===================================================================== */
    
    static function buildCardsNotice($titleNotice, $textNotice, $routeImage, $classContainer = "" )
    {

        echo '<DIV class="card h25em '.$classContainer.'">';
        echo '    <ASIDE class="aside-card">';
        echo '        <FIGURE>';
        echo '            <IMG class="card-img" src="'.$routeImage.'">';
        echo '        </FIGURE>';
        echo '    </ASIDE>';
        echo '    <DIV class="card-body">';
        echo '        <H5 class="card-title">'.$titleNotice.'</H5>';
        echo '        <P class="card-text">'.$textNotice.'</P>';
        echo '    </DIV>';
        echo '</DIV>';
    } //buildCardsNotice

    /*=======================================================================
    Function: buildFooter
    Description: build a check component
    Parameters: $titleNotice <-- title of notice
                $textNotice <-- Information
                $classContainer <-- for add class css
                $routeImage <-- route of img of notice
                Algorithm: 
    Remarks:
    Standarized: 2021-05-26 11:40
    ===================================================================== */
    
    static function buildFooter()
    {

        echo '<FOOTER class="footer-16371">';
        echo '    <DIV class="container">';
        echo '        <DIV class="row justify-content-center">';
        echo '            <DIV class="col-md-9 text-center">';
        echo '                <DIV class="footer-site-logo mb-4">';
        echo '                    <a href="#">Italviajes</a>';
        echo '                </DIV>';
        echo '                <UL class="list-unstyled nav-links mb-5">';
        echo '                    <li><a href="#">About</a></li>';
        echo '                    <li><a href="#">Services</a></li>';
        echo '                    <li><a href="#">Press</a></li>';
        echo '                    <li><a href="#">Careers</a></li>';
        echo '                    <li><a href="#">FAQ</a></li>';
        echo '                    <li><a href="#">Legal</a></li>';
        echo '                    <li><a href="#">Contact</a></li>';
        echo '                </UL>';
        // echo '                <DIV class="social mb-4">';
        // echo '                    <h3>Redes</h3>';
        // echo '                    <UL class="list-unstyled">';
        // echo '                    </UL>';
        // echo '                </DIV>';
        echo '                <DIV class="copyright">';
        echo '                    <P class="mb-0"><small>© Italviajes. All Rights Reserved.</small></P>';
        echo '                    <P> Designed and developed by:';
        echo '                        <B> Italviajes ft. Xatoxi </B>';
        echo '                    </P>';
        echo '                </DIV>';
        echo '            </DIV>';
        echo '        </DIV>';
        echo '    </DIV>';
        echo '</FOOTER>';
    } //buildFooter
    
}
