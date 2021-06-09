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
        echo '<SCRIPT src="./js/popper.min.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/bootstrap.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/bootstrap.bundle.js" type="text/javascript"></SCRIPT>';
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

    static function buildHead($title, $classBody = "")
    {
        if ($classBody != "") {
            $classBody = 'class="' . $classBody . '"';
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
        echo  ' <LINK href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
        echo  ' </HEAD> ';
        echo  ' <BODY ' . $classBody . '> ';
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

    static function startDiv($class)
    {
        echo '<DIV class="' . $class . '">';
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
        echo '        <INPUT class="option-input radio" id="' . $idInput . '" name="' . $nameInput . '" type="radio" />';
        echo '        <SPAN>' . $title . '</SPAN>';
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

    static function buildInputWithIcon($title, $typeInput, $nameInput, $idInput, $icon, $placeholder = "", $readOnly = "", $disabled = "")
    {
        if ($readOnly != "") {
            $readOnly = 'readOnly';
        }
        if ($disabled != "") {
            $disabled = 'disabled';
        }

        echo '<DIV class="webflow-style-input">';
        echo '    <LABEL for="" class="title-Input">' . $title . '</LABEL>';
        echo '    <INPUT class="input-icon" type="' . $typeInput . '" placeholder="' . $placeholder . '" name="' . $nameInput . '"  id="' . $idInput . '" ' . $readOnly . ' ' . $disabled . '></INPUT>';
        echo '    <BUTTON type="submit" class="btn-icon" disabled>';
        echo '        <I class="ion-android-arrow-forward material-icons prefix">' . $icon . '</I>';
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

    static function buildInput($title, $typeInput, $nameInput, $idInput, $placeholder = "", $readOnly = "", $disabled = "")
    {
        if ($readOnly != "") {
            $readOnly = 'readOnly';
        }
        if ($disabled != "") {
            $disabled = 'disabled';
        }
        echo '<DIV class="webflow-style-input">';
        echo '    <LABEL for="" class="title-Input">' . $title . '</LABEL>';
        echo '    <INPUT class="input-icon icon-absolute" type="' . $typeInput . '" placeholder="' . $placeholder . '" name="' . $nameInput . '"  id="' . $idInput . '" ' . $readOnly . ' ' . $disabled . '></INPUT>';
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

    static function buildCheckBox($title, $nameInput, $idInput, $disabled = "")
    {
        if ($disabled != "") {
            $disabled = 'disabled';
        }

        echo '<DIV class="width-25percent">';
        echo '    <INPUT type="checkbox" id="' . $idInput . '" name="' . $nameInput . '" ' . $disabled . '/>';
        echo '    <LABEL for="' . $idInput . '">' . $title . '</LABEL>';
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
        echo '<DIV class="container border-table mt20">';
        echo '    <TABLE id="example" class="customTableYg">';
        echo '        <THEAD>';
        echo '            <TR>';
        echo '                <th>Name</th>';
        echo '                <th>Position</th>';
        echo '                <th>Office</th>';
        echo '                <th>Age</th>';
        echo '                <th class="text-center">Start date</th>';
        echo '            </TR>';
        echo '        </THEAD>';
        echo '        <TBODY>';
        echo '            <TR>';
        echo '                <td class="text-center">';
        echo '                    <input type="checkbox" id="ave" />';
        echo '                    <label for="ave"></label>';
        echo '                </td>';
        echo '                <td class="customTableYg__info">';
        echo '                    <DIV>';
        echo '                        <img src="https://i.pinimg.com/originals/6e/22/56/6e2256829eadd83cd966c6ea6f807bf2.jpg" alt="agencia de viajes">';
        echo '                    </DIV>';
        echo '                    <DIV class="customTableYg__info__2">';
        echo '                        <p class="customTableYg__schedule">14:00 16:14</p>';
        echo '                        <h3 class="customTableYg__destination">MIA Miami - SDQ Aeropuerto</h3>';
        echo '                    </DIV>';
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
        echo '            </TR>';
        echo '        </TBODY>';
        echo '    </TABLE>';
        echo '</DIV>';
    } //buildGrid


    static function fillGridArrPaginatorFullLink($arr, $arrCol, $clase = "", $check = "0", $select = "0", $eventradio, $id = "")
    {
        $nr = count($arr);
        $nc = count($arrCol);
        echo '<table id=' . $id . ' class="display ' . $clase . '" width="100%">';
        echo '<thead>';
        echo "<tr>";
        if ($check) {
            echo "<th>Selec.</th>";
        }
        if ($select) {
            echo "<th>Selec.</th>";
        }
        for ($i = 0; $i < $nc; $i++) {
            $name = $arrCol[$i];
            //$claseTh = "th".$i;
            echo "<th class = 'text-center'>" . $name . "</th>";
        }
        echo "</tr>";
        echo '</thead>';

        echo '<tbody>';
        $end = 0;

        //print_r($arr);
        if (is_array($arr)) { // bring values
            for ($i = 0; $i < $nr; $i++) {
                $clase = "td" . $i;
                echo "  <tr> ";                

                    echo '<td class="text-center">';
                    echo '    <input class="customTableYg__check"';
                    echo '        type="checkbox" id="CB'.$i.'">';
                    echo '</td>';
                    echo '<td class="customTableYg__info">';
                    echo '    <div>';
                    echo '        <img src="./img/'.$_POST["img"].'"';
                    echo '            alt="agencia de viajes">';
                    echo '    </div>';
                    echo '    <div class="customTableYg__info__2">';
                    echo '        <p class="customTableYg__schedule">'.$_POST["horario"].'/p>';
                    echo '        <h3 class="customTableYg__destination">'.$_POST["ruta"].'</h3>';
                    echo '    </div>';
                    echo '</td>';
                    echo '<td class="customTableYg__type">';
                    echo '   '.$_POST["ModoVuelo"].'';
                    echo '</td>';
                    echo '<td class="customTableYg__time">'.$_POST["TiempoVuelo"].'</td>';
                    $name = "CB" . $i;
                    $id = "CB" . $i;
                    echo '<td class="text-center">';
                    echo '    <h3 class="customTableYg__price">';
                    echo '       '.$_POST["Precio"].'';
                    echo '        <small>';
                    echo '            '.$_POST["PrecioTotal"].' en total';
                    echo '        </small>';
                    echo '    </h3>';
                    echo '    <button class="btnCustom btnCustom-table" name ="'.$name.'" id = "' . $id . '"  onclick="' . $eventradio . '">';
                    echo '        Seleccionar';
                    echo '    </button>';
                    echo '</td>';   

                echo '</tr>';
            }
        }
        // else {
        //   $end=1;
        // }
        echo '</tbody>';
        echo '</table>';
    }
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


}
